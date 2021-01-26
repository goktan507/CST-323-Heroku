<?php
namespace App\Data;

use App\Model\User;


class SecurityDAO implements SecurityInterface
{

    private $servername = "localhost";

    private $username = "root";

    private $password = "root";

    private $dbname = "e-storetable";

    private $connection = NULL;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (! $this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function read(User $user)
    {
        $userUsername = $user->getUsername();
        $userPassword = $user->getPassword();
        
        if ($this->connection) {
            $sql_statement = "SELECT * FROM `persontable` WHERE `Username`= '$userUsername' AND `Password` = '$userPassword' LIMIT 1";
            $result = mysqli_query($this->connection, $sql_statement);
            if ($result) {
                if (mysqli_num_rows($result) == 1) {
                    session_start();
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['userid'] = $row['ID'];
                    $_SESSION['name'] = $row['Name'];
                    mysqli_close($this->connection);
                    return TRUE;
                } else {

                    echo "Login unsuccessful<br>";
                    mysqli_close($this->connection);
                    return FALSE;
                }
            } else {

                echo "Error" . mysqli_error($this->connection);

                return FALSE;
            }
        } else {

            echo "Error connecting " . mysqli_connect_errno();

            return FALSE;
        }
    }

    public function create(User $user)
    {
        if ($user->getName() == null || $user->getUsername() == null || $user->getEmail() == null || $user->getPassword() == null) {
            echo "1";
            return FALSE;
        }

        if (! $this->connection) {
            die("<br>Connection failed: " . mysqli_connect_error());
            echo "2";
            return FALSE;
        }

        $userUsername = $user->getUsername();
        $userPassword = $user->getPassword();
        $userName = $user->getName();
        $userEmail = $user->getEmail();
        
        
        $sql_statement_check = "SELECT * FROM `persontable` WHERE `Email`= '$userEmail'";
        $result_check = mysqli_query($this->connection, $sql_statement_check);

        if (mysqli_num_rows($result_check) >= 1) {
            echo "3";
            return FALSE;
        }

        $sql_statement_check = "SELECT * FROM `persontable` WHERE `Username`= '$userUsername'";
        $result_check = mysqli_query($this->connection, $sql_statement_check);

        if (mysqli_num_rows($result_check) >= 1) {
            echo "4";
            return FALSE;
        } else {

            $sql_statement = "INSERT INTO `persontable` (`ID`, `Username`, `Password`, `Name`, `Email`) VALUES (NULL, '$userUsername' , '$userPassword', '$userName', '$userEmail')";

            if (mysqli_query($this->connection, $sql_statement)) {
                mysqli_close($this->connection);
                return TRUE;
            } else {
                echo "<br>Error: " . $sql_statement . "<br>" . mysqli_error($this->connection);
                echo "5";
                return FALSE;
            }
        }
    }

    public function update(User $user)
    {}

    public function delete(User $user)
    {}

    public function getProducts()
    {
        $sql = 'SELECT `products_ID`, `Type`, `Category`, `Brand`, `Size`, `Hz Rate`, `Power`, `Price`, `Connectivity` FROM `productstable`';

        $result = mysqli_query($this->connection, $sql);

        $index = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $products[$index] = array(
                $row['products_ID'],
                $row['Type'],
                $row['Category'],
                $row['Brand'],
                $row['Size'],
                $row['Hz Rate'],
                $row['Power'],
                $row['Price'],
                $row['Connectivity']
            );
            ++ $index;
        }
        mysqli_close($this->connection);
        return $products;
    }
}

