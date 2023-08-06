siimpleQueryBuilder is a PHP library that provides a simple and easy-to-use query builder for constructing SQL queries. It allows you to build complex SELECT queries with various conditions, joins, and more. The library is designed to be lightweight, flexible, and suitable for a wide range of PHP projects.

Features
Build SELECT queries with custom columns.
Add multiple conditions to the WHERE clause.
Perform table joins with ease.
Support for more query types can be easily added.
Requirements
PHP version 7.2 or higher.
Installation
You can install siimpleQueryBuilder via Composer. Simply add the following line to your composer.json file and run composer install:

json
Copy code
{
    "require": {
        "robinksp/siimple-query-builder": "^1.0"
    }
}
Save to grepper
Alternatively, you can run the following command directly in your project root:

bash
Copy code
composer require robinksp/siimple-query-builder:^1.0
Save to grepper
Basic Usage
php
Copy code
use siimpleQueryBuilder\Builder;
use siimpleQueryBuilder\Connection\MySqlConnection;

// Initialize the database connection.
$connection = new MySqlConnection('your_database_host', 'your_database_name', 'your_database_username', 'your_database_password');
$connection->connect();

// Create the query builder.
$builder = new Builder();

// Build a SELECT query.
$query = $builder->select('name', 'email')
                 ->from('users')
                 ->where('age', '>', 25)
                 ->orWhere('role', 'admin')
                 ->build();

// Execute the query using the connection object.
$result = $connection->query($query);

// Fetch the results.
$rows = $result->fetchAll();

// Process the data as needed.
foreach ($rows as $row) {
    echo $row['name'] . ' - ' . $row['email'] . '<br>';
}
Save to grepper
Documentation
For detailed information on the available methods and usage examples, please refer to the documentation.

Contribution
Contributions are welcome! If you encounter any bugs, have feature requests, or want to improve the library, feel free to open an issue or submit a pull request.

License
siimpleQueryBuilder is open-source software licensed under the MIT License.

Thank you for using siimpleQueryBuilder! We hope this library simplifies your SQL query building process. If you have any questions or need further assistance, please don't hesitate to reach out. Happy coding!