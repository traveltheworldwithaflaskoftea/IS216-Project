<?php

require_once 'accountDAO.php';
$dao = new accountDAO();
$accounts = $dao->getAccounts(); 
var_dump($accounts); 

?>
<!-- 
<html>
<body>

    <h1>Our Cats</h1>

    <form action='display.php' method='POST'>

        <table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Status</th>
            </tr>

            <?php
                foreach($cats as $cat) {
                    echo "
                        <tr>
                            <td>"; 
                            echo
                                "{$cat->getName()}"; 
                            echo"
                            </td>
                            <td>
                                {$cat->getAge()}
                            </td>
                            <td>
                                {$cat->getGender()}
                            </td>
                    ";
                    $status_msg = 'Available';
                    if( $cat->getStatus() == 'P' ) {
                        $status_msg = 'Pending Adoption';
                    }
                    
                    echo "
                            <td>
                                $status_msg
                            </td>
                        </tr>
                    ";
                }
            ?>

        </table>

        <br>
        Filter by Status:<br>
        <select name='status'>
            <?php
                $statusArr = [
                    'A' => 'Available',
                    'P' => 'Pending Adoption'
                ];

                foreach($statusArr as $key=>$value) {
                    $selected = '';
                    if($key == $status) {
                        $selected = 'selected';
                    }

                    echo "
                    <option value='$key' $selected> $value </option>
                    ";
                }

            ?>
        </select>

        <br><br>
        <input type='Submit' value='Filter'>

    </form>

<hr>
Click <a href='display.php'>here</a> to Reset This Page<br>

</body>
</html> -->