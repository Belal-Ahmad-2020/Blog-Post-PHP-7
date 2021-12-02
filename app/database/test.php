<?php
require("connect.php");
/*  1
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
var_dump($users);
echo "<pre>". print_r($users) ."</pre>";
*/

/*  2
function selectAll($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

$users = selectAll('users');//select *from users;
echo "<pre>". print_r($users) ."</pre>";
*/


/*  3
function selectAll($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

$users = selectAll('users');//select *from users;
dd($users);
*/



/*4
function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        // return those recordes that match to the condition
        // $sql = "SELECT * FROM users WHERE admin='1' AND username='Belal'";
        //$sql = "SELECT * FROM $table WHERE admin='1' AND username='Belal'";
        foreach ($conditions as $key => $value) {
            $sql . " WHERE $key=>$value"; //key = admin  value = 1
        }
    }
    
}

$conditions = [
    'admin' => 1,
    'username' => 'Belal'
]

$users = selectAll('users');//select *from users;
dd($users);
*/



/* 5
function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>$value"; //key = admin  value = 1    
            }
            else {
                $sql = $sql . " AND $key=>$value"; //key = admin  value = 1
            }
            $i++;
        }
        dd($sql); //select * from users where admin='1' AND username ="belal';
    }
}

$conditions = [
    'admin' => 1,
    'username' => 'Belal'
];

$users = selectAll('users', $conditions);//select *from users;
dd($users);
*/


/* 6
function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }
        //dd($sql); select*from users where admin=? and username=?
        $stmt = $conn->prepare($sql); //we user prepare to avoid sql injection
        // $stmt->bind_param(data, types); we use it to bind the condtion to the sql query
        $stmt->bind_param($conditions, "is"); //i=integer s=string
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
}

$conditions = [
    'admin' => 1,
    'username' => 'Belal'
];

$users = selectAll('users', $conditions);
dd($users);
*/



/* 7
function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }        
        $stmt = $conn->prepare($sql); 
        $values = array_values($conditions); // it extracts only the values not the keys
        // $types = str_repeat("string that we want to repeat", "number of times u want to repeat");
        $types = str_repeat("s", count($values));
        $stmt->bind_param($types, ...$values);//spered operator
        //$stmt -> bind_param("ss", [admin, username]); 
        //$stmt -> bind_param("ss", 2); 
        //$stmt -> bind_param("ss", $admin, $username); 
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
}

$conditions = [
    'admin' => 1,
    'username' => 'Belal'
];

$users = selectAll('users', $conditions);
dd($users);
*/




/* 9
function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }        
        
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($conditions);
    $types = str_repeat("s", count($conditions));
    $stmt->bind_param($types, $values);
    $stmt->execute();
    $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records; 
    }
}

$conditions = [    
    'admin' => 1,
    'username' => 'Belal'
];

$users = selectAll('users', $conditions);
dd($users);

*/




/* 10
function selectOne($table, $conditions) {
    global $conn;
    $sql = "SELECT * FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }
    // $sql = select * from users where admin='1' AND username='Belal' LIMIT 1;
    $sql = $sql . " LIMIT 1";    

    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($conditions);
    $types = str_repeat("s", count($conditions));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();  
    return $records;
    
}

$conditions = [    
    "admin" => 1,
    "username" => "Belal"
];

$users = selectOne("users", $conditions);
dd($users);




*/


// function dd($values) { //dispalys the values
//     echo "<pre>". print_r($values, true ) ."</pre>";
//     die();
// }

/* 10
function executeQuery($sql, $data) { //$data = conditions
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, $values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions=[]) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }        
        
    $stmt = executeQuery($sql, $conditions);
    $records  = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records; 
    }
}

function selectOne($table, $conditions) {
    global $conn;
    $sql = "SELECT * FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql." WHERE $key=>?"; 
            }
            else {
                $sql = $sql . " AND $key=>?"; 
            }
            $i++;            
        }
    $sql = $sql . " LIMIT 1";    
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();  
    return $records;
    
}

$conditions = [    
    "admin" => 1,
    "username" => "Belal"
];

$users = selectOne("users", $conditions);
dd($users);

*/



function dd($value) // to be deleted
{
    echo "<pre>", var_dump($value, true), "</pre>";
    die();
}


function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }        
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}



function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }        
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
}

// $conditions = [    
//     "admin" => 1,
//     "username" => "Belal"
// ];

// $users = selectOne("users", $conditions);
// dd($users);


function create($table, $data) {
    global $conn;
    // $sql = "INSERT INTO users(username,email,password) VALUES(?, ?, ?, ?)";
    // $sql = "INSERT INTO users SET username='?', email='?', passwrod='?' ";
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    //dd($sql);    //'INSERT INTO users SET  admin=?, username=?'
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;  //we can get the id of inserted record
    return $id; // just return the id of that record
}


// $data = [    
//     "admin" => 1,
//     "username" => "Admin",
//     "email" => "admin@gmail.com",
//     "password" => "admin123"
// ];

// $id = create("users", $data);
// dd($id);



/*
function update($table, $id, $data) {
    global $conn;
//$sql = "UPDATE users SET username='?', admin='?' Where id='?'  ";
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;  //attach the id to the data // "id" => 21
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows; 
}
*/


function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

// $data = [    
//     "admin" => 1,
//     "username" => "Kamal",
//     "email" => "kamal@gmail.com",
//     "password" => "kamal123"
    
// ];

// $id = update("users", 21, $data);
// dd($id);



/*
function delete($table, $id)
{
    global $conn;
    // $sql = "delete from users where id=?"
    $sql = "DELETE FROM  $table WHERE id=?";
    $stmt = executeQuery($sql, ['id'] => $id]); // associative id of array
    return $stmt->affected_rows;
}
*/

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

$id = delete("users", 22);
dd($id);















