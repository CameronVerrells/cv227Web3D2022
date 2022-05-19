<?php
class Model {
    // Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/database.db';

        // Then create a connection to a database with the PDO() function
        try {
            // Change connection string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // 'Database connection created</br></br>';
        }
        catch (PDOEXception $e) {
            echo "Database connection error";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Home_Model (Id INTEGER PRIMARY KEY, brand TEXT, imageUrl TEXT, modelUrl TEXT, description TEXT)");
            return "Model_3D table is successfully created";
        }
        catch (PD0EXception $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData(){
        try{
                $this->dbhandle->exec(
                    "INSERT INTO Home_Model (Id, brand, imageUrl,modelUrl, description) 
                        VALUES (1, 'Coke', 'cocaCola','colaCan','Atlanta Beginnings: It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.'); " .
                    "INSERT INTO Home_Model (Id, brand, imageUrl,modelUrl, description) 
                        VALUES (2, 'Fanta', 'fanta','fantaCan','First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
                    "INSERT INTO Home_Model (Id, brand, imageUrl,modelUrl, description) 
                        VALUES (3, 'DrPepper', 'drPepper','drPepperCan','Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.'); " .
                    "INSERT INTO Home_Model (Id, brand, imageUrl,modelUrl, description)
                        VALUES (4, 'Costa', 'costa','costaCup','Costa Coffee is a British coffeehouse chain with headquarters in Dunstable, England. Costa Coffee was founded in London in 1971 by Sergio Costa as a wholesale operation supplying roasted coffee to caterers and specialist Italian coffee shops.');");
                return "Homepage data inserted";
            }
        catch(PD0EXception $e) {
        print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbGetData(){
        try{
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Home_Model';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                // Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
                // echo '</br>' . $data['x3dModelTitle'];
                // Write the database conetnts to the results array for sending back to the view
                $result[$i]['brand'] = $data['brand']; // Not used in the view, instead using the fake dbGetBrand() function above
                $result[$i]['imageUrl'] = $data['imageUrl'];
                $result[$i]['modelUrl'] = $data['modelUrl'];
                $result[$i]['description'] = $data['description'];
                //increment the row index
                $i++;
            }
        }
        catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }
}
?>