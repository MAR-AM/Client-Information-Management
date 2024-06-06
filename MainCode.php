<?php 
        $conn  = new PDO('mysql:host=localhost; dbname=Location_Imobilier','Mama','****');

        $requete = "SELECT * FROM client";
        $resultat = $conn->query($requete);
    
        $data = $resultat ->fetchAll(PDO::FETCH_ASSOC);
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display :flex;
            align-items:center;
            justify-content: center;
        }
        table{
            margin-top:100px;
            width: 950px;
            height:300px
        }
        td{
            border-bottom: solid 1px grey;
            text-align:center;
            padding:1px;
        }
        th{
            border-bottom: solid 2px black;
            padding: 10px;
        }
        button{
            width: 90px;
            height:30px;
            background-color:skyblue;
            border:solid 1px skyblue;
            border-radius:10px;
            text-decoration:none;
        }
        span{
            width: 200px;
            height:25px;
            border:solid 1px white;
            border-radius:10px 4px;
            padding:5px 25px;
        }
    </style>
</head>
<body>
<table  cellspacing="0" >
        <tr>
            <th>Id client </th>
            <th> CIN </th>
            <th> NOM </th>
            <th> PRENOM </th>
            <th> Age </th>
            <th> EMAIL </th>
            <th> Password </th>
            <th> Operation </th>
        </tr>
    <?php foreach ($data as $i):  ?>
        <tr>
            <td><?php echo $i['id_client'] ?></td>
            <td><?php echo $i['cin'] ?></td>
            <td><?php echo $i['nom'] ?></td>
            <td><?php echo $i['prenom'] ?></td>
            <td >
                <span>
                    <?php
                        if ($i['age'] <= 20){
                                    echo '<span style="background-color:greenyellow">'.$i['age'];
                        } 
                        elseif ($i['age'] > 20 & $i['age'] <= 30){
                            echo '<span style="background-color:#fefe64">'.$i['age'];
                        } 
                        else{
                            echo '<span style="background-color:#ff5e5e">'.$i['age'];
                        }
                    ?>
                </span>
             </td>
            <td><?php echo $i['email'] ?></td>
            <td><?php echo $i['password'] ?></td>
            <td>
                <button><a href="supprimer.php?id_client=<?php echo $i['id_client']?>" class="#button">Supprimer</a></button>   
            </td>

        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>
