<?php
// facilitate data fetching

require_once 'account.php';
require_once 'ConnectionManager.php';

class accountDAO {
    
    // This public function is callable from OUTSIDE 'accountDAO' class
    // By calling this function, the caller can retrieve ALL rows from 'account' Database table
    // It returns an Indexed Array of account objects
    public function getAccounts() {
        
        // STEP 1 - COnnect to DB
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->connect(); // PDO object
        
        // STEP 2- Write and register SQL query
        // 
        $sql = "SELECT
                    username, name, password, email, phone_number, postal_code, adoption_basket
                FROM
                    account"; //string 
        $stmt = $pdo->prepare($sql); // PDOStatement object
        //$stmt is an executable query in PDO

        // STEP 3 - Run/execute query 
        $stmt->execute(); // RUN SQL
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Retrieve each row as an Associative Array
        /* Each row loooks like this
            [
                'name' => 'Flower',
                'age' => 7,
                'gender' => 'F',
                'status' => 'P'
            ]
        */

        // STEP 4 - Fetch query results  
        $accounts = [];
        while ( $row = $stmt->fetch() ) {
            $accounts = new account( 
                        $row['username'], 
                        $row['name'], 
                        $row['password'], 
                        $row['email'], 
                        $row['phone_number'], 
                        $row['postal_code'], 
                        $row['adoption_basket'] 
                    ); // new account object
            // $accounts[] = $account; // add account object to ret array
        }
        
        // STEP 5
        $stmt = null; // clear memory
        $pdo = null; // clear memory
        
        // STEP 6
        return $accounts;
    }
    // Getting specific account details
    public function get_Account_detail($username) {

        // STEP 1 - Connect to MySQL Database
        $connMgr = new ConnectionManager(); 
        $pdo = $connMgr->connect(); 

        // STEP 2 - Prepare SQL Query
        $sql = "
            select 
                *
            from
                account
            WHERE 
                username = :username
        ";
        $stmt = $pdo->prepare($sql); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
        // STEP 3 - Run Query
        $isOk = $stmt->execute();
        
        // STEP 4 - Fetch query results  
        $account_details = [];
        while ( $row = $stmt->fetch() ) {
            $account_details =new account( 
                $row['username'], 
                $row['name'], 
                $row['password'], 
                $row['email'], 
                $row['phone_number'], 
                $row['postal_code'], 
                $row['adoption_basket'] 
            );
        }
        
        // STEP 5
        $stmt = null; // clear memory
        $pdo = null; // clear memory
        
        // STEP 6
        return $account_details;
    }

    // Adds a new account
    // Return TRUE (if no SQL error) or FALSE (SQL error)
    public function add($username, $name, $password, $email, $phone_number, $postal_code, $adoption_basket) {        
        // STEP 1 - Connect to MySQL Database
        $connMgr = new ConnectionManager();
        $pdo= $connMgr->connect(); 

        // STEP 2 - Prepare SQL Query
        $sql = "
        INSERT INTO 
            account 
            VALUES 
            (:username,:name,:password,:email,:phone_number,:postal_code, :adoption_basket)
            ";

        $stmt =$pdo->prepare($sql); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone_number', $phone_number, PDO::PARAM_INT);
        $stmt->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
        $stmt->bindParam(':adoption_basket', $adoption_basket, PDO::PARAM_STR); 

        // STEP 3 - Run Query
                $isOk = $stmt->execute();
                
                // STEP 4
                $stmt = null;
                $pdo = null;        
                
                // STEP 5
                return $isOk;
            }

    // Update the dog IDs in adoption basket 
    // Return TRUE (if no SQL error) or FALSE (SQL error)
    public function updateAdoptionBasket($username, $adoption_basket) {

        // STEP 1 - Connect to MySQL Database
        $connMgr = new ConnectionManager(); 
        $pdo = $connMgr->connect(); 

        // STEP 2 - Prepare SQL Query
        $sql = "
            UPDATE 
                account
            SET
                adoption_basket= :adoption_basket
            WHERE 
                username = :username
        ";
        $stmt = $pdo->prepare($sql); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
        $stmt->bindParam(':adoption_basket', $adoption_basket, PDO::PARAM_STR); 
        // STEP 3 - Run Query
        $isOk = $stmt->execute();
        
        // STEP 4
        $stmt = null;
        $pdo = null;        
        
        // STEP 5
        return $isOk;
    }

    // Function to retrieve Dogbasket, input is user name 
    public function getadoptionbasket($username) {

        // STEP 1 - Connect to MySQL Database
        $connMgr = new ConnectionManager(); 
        $pdo = $connMgr->connect(); 

        // STEP 2 - Prepare SQL Query
        $sql = "
            select 
                *
            from
                account
            WHERE 
                username = :username
        ";
        $stmt = $pdo->prepare($sql); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
        // STEP 3 - Run Query
        $isOk = $stmt->execute();
        
        // STEP 4 - Fetch query results  
        $adoption_basket = [];
        while ( $row = $stmt->fetch() ) {
            $adoption_basket = $row['adoption_basket']; 
        }
        
        // STEP 5
        $stmt = null; // clear memory
        $pdo = null; // clear memory
        
        // STEP 6
        return $adoption_basket;
    }

    public function authenticate($username, $password) {
        // Step 1 - Connect to Database
        $connMgr = new ConnectionManager(); 
        $pdo = $connMgr->connect(); 

        // Step 2 - Prepare SQL
        $sql = "SELECT
                    *
                FROM
                    account
                WHERE
                    username = :username
                    AND
                    password = :password
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // Step 3 - Execute SQL
        $isValid = False;
        
        if( $stmt->execute() ) {

            // Step 4 - Retrieve Query Results
            if( $stmt->rowCount() > 0 ) {
                $isValid = True;
            }
        }
        
        // Step 5 - Clear Resources
        $stmt = null;
        $pdo = null;

        // Step 6 - Return
        return $isValid;
    }
}
?>
