<?php
   function conectaBD(){
    $con=new PDO("mysql:host=localhost;dbname=formulario","root","");
    return $con;
}

function verificarCredenciais($email, $senha) {
    $con=conectaBD();
   
    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stm= $con->prepare($sql);
    $stm->bindParam(1,$email);
    $stm->bindParam(2,$senha);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    
   
    // Verifica se a consulta retornou algum resultado
    if (count($result) > 0) {
        // As credenciais são válidas
        return true;
    } else {
        // As credenciais são inválidas
        return false;
    }

}

function insereUsuario($nome,$senha,$email,$telefone,$sexo,$data_nasc){
    try {
        $con = conectaBD();
        //configura o PDO para lançar exceções em caso de erro
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nome,senha,email,telefone,sexo,data_nasc) VALUES (?,?,?,?,?)";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$nome);
        $stm->bindParam(2,$senha);
        $stm->bindParam(3,$email);
        $stm->bindParam(4,$telefone);
        $stm->bindParam(5,$sexo);
        $stm->bindParam(5,$data_nasc);
        $stm->execute();
    
    }catch ( PDOEXception $e){
        echo 'ERROR: ' . $e->getMessage();
    }

    header('Location: telaLogin.php');
}

// create a function to update a user in the database  parameters are the id and the name email and password cidade
function atualizaUsuario($id,$nome,$login,$email,$senha,$cidade){
    try {
        $con = conectaBD();
        //configura o PDO para lançar exceções em caso de erro
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuarios SET nome=?,senha=?,email=?,telefone=?,sexo=?,data_nasc=? WHERE id=?";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$nome);
        $stm->bindParam(2,$senha);
        $stm->bindParam(3,$email);
        $stm->bindParam(4,$telefone);
        $stm->bindParam(5,$sexo);
        $stm->bindParam(5,$data_nasc);
        $stm->execute();
    
    }catch ( PDOEXception $e){
        echo 'ERROR: ' . $e->getMessage();
    }
}

// create a function to delete a user in the database  parameters are the id
function deletaUsuario($id){
    $con=conectaBD();
    $sql="DELETE FROM usuarios WHERE id=?";
    try {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
    }catch (PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }

}

function getAllUsuarios(){
    $con=conectaBD();
    $sql="SELECT * FROM usuarios";
    $stm=$con->prepare($sql);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function  getUsuario(){
    $con=conectaBD();
    $sql="SELECT * FROM usuarios WHERE id=?";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUsuarioLike($nome){
    $con=conectaBD();
    $sql="SELECT * FROM usuarios WHERE nome like ?";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$nome);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAllUusersJson(){
    $con=conectaBD();
    $sql="SELECT * FROM usuarios";
    $stm=$con->prepare($sql);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($result);
}

function getUsersLike($str){
    try{
    $str="%".$str."%";
    $con=conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM usuarios WHERE nome like ? ";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$str);
    $stm->execute();
    }   catch (PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }


    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($result);
}
?>