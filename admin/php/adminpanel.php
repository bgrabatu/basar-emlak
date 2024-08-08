<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$errors = array();

session_start();

include_once('errors.php');
include_once('dbconnect.php');  



function validate($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

function splitByComma($sentence)
{
    $words = preg_split('/\s*,\s*/', $sentence, -1, PREG_SPLIT_NO_EMPTY);
    return $words;
}



function cleanTurkishCharacters($text)
{
    $turkishCharacters = array('ç', 'ğ', 'ı', 'i', 'ö', 'ş', 'ü', 'Ç', 'Ğ', 'İ', 'Ö', 'Ş', 'Ü', ' ', "'");
    $englishCharacters = array('c', 'g', 'i', 'i', 'o', 's', 'u', 'C', 'G', 'I', 'O', 'S', 'U', '-', '');

    $cleanedText = str_replace($turkishCharacters, $englishCharacters, $text);
    $cleanedText = preg_replace('/[^A-Za-z0-9\-]/', '', $cleanedText); // Remove special characters
    $cleanedText = strtolower($cleanedText); // Convert to lowercase

    return $cleanedText;
}

function cleanPhoneNumber($phoneNumber)
{
    $cleanedNumber = str_replace(['(', ')', ' '], '', $phoneNumber);
    return $cleanedNumber;
}


$tableNameBranch = "branches";
$columnsBranch = ['branch_id', 'branch_name', 'branch_owner', 'branch_address', 'branch_phone', 'branch_email'];

$tableNamePersonnel = "personnel";
$columnsPersonnel = ['personnel_id', 'branch_id', 'personnel_name', 'personnel_surname', 'personnel_role', 'personnel_password', 'personnel_gmail', 'personnel_phone', 'personnel_address', 'personnel_job'];

// VERITABANINA SUBE EKLEME KODLARI
if (isset($_POST['branch-add'])) {
    $branch_name = mysqli_real_escape_string($db, $_POST['branch_name']);
    $branch_owner = mysqli_real_escape_string($db, $_POST['branch_owner']);
    $branch_address = mysqli_real_escape_string($db, $_POST['branch_address']);
    $branch_phone = mysqli_real_escape_string($db, $_POST['branch_phone']);
    $branch_email = mysqli_real_escape_string($db, $_POST['branch_email']);

    if (empty($branch_name) && empty($branch_owner)) {
        array_push($errors, "Enter the branch name and owner!");
    }

    $branch_title_query = "SELECT * FROM branches WHERE `branch_name`='$branch_name'";
    $resultBranchTitleQuery = mysqli_query($db, $branch_title_query);
    $branchAlreadyControl = mysqli_fetch_assoc($resultBranchTitleQuery);

    if ($branchAlreadyControl) {
        if ($branchAlreadyControl['branch_name'] === $branch_name) {
            array_push($errors, "This branch is already available in the system!");
        }
    }


    if (count($errors) == 0) {
        $query = "INSERT INTO branches (branch_name,branch_owner,branch_address,branch_phone,branch_email) 
        VALUES ('$branch_name','$branch_owner','$branch_address','$branch_phone','$branch_email')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: app-branch-list.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}

// SUBE LISTESINE VERI CEKME KODLARI
$fetchDataBranch = fetch_data_branch($db, $tableNameBranch, $columnsBranch);
function fetch_data_branch($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " ORDER BY branch_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Sube Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

// VERITABANINDAN SUBE SILME KODLARI
if (isset($_GET['deleteBranch'])) {
    $id = validate($_GET['deleteBranch']);
    $condition = ['branch_id' => $id];
    $deleteMsg = delete_data_branch($db, $tableNameBranch, $condition);
    header("location:app-branch-list.php");
}

function delete_data_branch($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}


//VERITABANINDAN SUBE DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $branch_id = end($url_segments);
    $id = validate($branch_id);
    $fetchDataBranchDetails = fetch_data_branch_detail($db, $tableNameBranch, $columnsBranch, $id);
}
function fetch_data_branch_detail($db, $tableName, $columns, $id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE branch_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


// VERITABANINDA SUBE GUNCELLEME KODLARI
if (isset($_POST['branch-update'])) {
    $branch_id = mysqli_real_escape_string($db, $_POST['branch_id']);
    $branch_name = mysqli_real_escape_string($db, $_POST['branch_name']);
    $branch_owner = mysqli_real_escape_string($db, $_POST['branch_owner']);
    $branch_address = mysqli_real_escape_string($db, $_POST['branch_address']);
    $branch_phone = mysqli_real_escape_string($db, $_POST['branch_phone']);
    $branch_email = mysqli_real_escape_string($db, $_POST['branch_email']);

    $select_query = "SELECT * FROM branches WHERE branch_id = '$branch_id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $update_query = "UPDATE branches SET 
        branch_name = '$branch_name',
        branch_owner = '$branch_owner',
        branch_address = '$branch_address',
        branch_phone = '$branch_phone',
        branch_email = '$branch_email'
        WHERE branch_id = '$branch_id'";

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-branch-list.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}







// VERITABANINA PERSONEL EKLEME KODLARI
if (isset($_POST['personnel-add'])) {
    $branch_id = mysqli_real_escape_string($db, $_POST['branch_id']);
    $personnel_name = mysqli_real_escape_string($db, $_POST['personnel_name']);
    $personnel_surname = mysqli_real_escape_string($db, $_POST['personnel_surname']);
    $personnel_role = mysqli_real_escape_string($db, $_POST['personnel_role']);
    $personnel_password = mysqli_real_escape_string($db, $_POST['personnel_password']);
    $personnel_gmail = mysqli_real_escape_string($db, $_POST['personnel_gmail']);
    $personnel_phone = mysqli_real_escape_string($db, $_POST['personnel_phone']);
    $personnel_address = mysqli_real_escape_string($db, $_POST['personnel_address']);
    $personnel_job = mysqli_real_escape_string($db, $_POST['personnel_job']);
    $personnel_password_repeat = mysqli_real_escape_string($db, $_POST['personnel_password_repeat']);

    if (empty($personnel_name) && empty($personnel_surname) && empty($personnel_role) && empty($personnel_password) && empty($personnel_job)) {
        array_push($errors, "Enter the personnel name,surname,role,password and job!");
    }

    if ($personnel_password !== $personnel_password_repeat) {
        array_push($errors, "Password is not matched");
    }

    $personnel_title_query = "SELECT * FROM personnel WHERE `personnel_name`='$personnel_name' AND `personnel_surname`='$personnel_surname' AND `personnel_phone`='$personnel_phone' ";
    $resultPersonnelTitleQuery = mysqli_query($db, $personnel_title_query);
    $personnelAlreadyControl = mysqli_fetch_assoc($resultPersonnelTitleQuery);

    if ($personnelAlreadyControl) {
        if ($personnelAlreadyControl['personnel_name'] === $personnel_name && $personnelAlreadyControl['personnel_surname'] === $personnel_surname && $personnelAlreadyControl['personnel_phone'] === $personnel_phone) {
            array_push($errors, "This person is already available in the system!");
        }
    }

    if (count($errors) == 0) {
        $personnel_password=md5($personnel_password);
        $query = "INSERT INTO personnel (branch_id,personnel_name,personnel_surname,personnel_role,personnel_password,personnel_gmail,personnel_phone,personnel_address,personnel_job) 
        VALUES ('$branch_id','$personnel_name','$personnel_surname','$personnel_role','$personnel_password','$personnel_gmail','$personnel_phone','$personnel_address','$personnel_job')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: app-personnel.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}

// PERSONEL LISTESINE VERI CEKME KODLARI
$fetchDataPersonnel = fetch_data_personnel($db, $tableNamePersonnel, $columnsPersonnel);
function fetch_data_personnel($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " ORDER BY personnel_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Sube Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


//VERITABANINDAN SUBE DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $personnel_id = end($url_segments);
    $id = validate($personnel_id);
    $fetchDataPersonnelDetails = fetch_data_personnel_detail($db, $tableNamePersonnel, $columnsPersonnel, $id);
}
function fetch_data_personnel_detail($db, $tableName, $columns, $id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE personnel_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


// VERITABANINDAN PERSONEL SILME KODLARI
if (isset($_GET['deletePersonnel'])) {
    $id = validate($_GET['deletePersonnel']);
    $condition = ['personnel_id' => $id];
    $deleteMsg = delete_data_personnel($db, $tableNamePersonnel, $condition);
    header("location:app-personnel.php");
}

function delete_data_personnel($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}



// VERITABANINA MULK EKLEME KODLARI
if (isset($_POST['property-add'])) {
    $property_name = mysqli_real_escape_string($db, $_POST['property_name']);
    $branch_id = mysqli_real_escape_string($db, $_POST['branch_id']);
    $personnel_id = mysqli_real_escape_string($db, $_POST['personnel_id']);

    $property_size = mysqli_real_escape_string($db, $_POST['property_size']);
    $property_bedroom_count = mysqli_real_escape_string($db, $_POST['property_bedroom_count']);
    $property_bathroom_count = mysqli_real_escape_string($db, $_POST['property_bathroom_count']);
    $property_livingroom_count = mysqli_real_escape_string($db, $_POST['property_livingroom_count']);
    $property_province = mysqli_real_escape_string($db, $_POST['property_province']);
    $property_district = mysqli_real_escape_string($db, $_POST['property_district']);
    $property_neighbourhood = mysqli_real_escape_string($db, $_POST['property_neighbourhood']);
    $property_address_link = mysqli_real_escape_string($db, $_POST['property_address_link']);
    $property_address_code = mysqli_real_escape_string($db, $_POST['property_address_code']);
    $property_brief_info = mysqli_real_escape_string($db, $_POST['property_brief_info']);
    $property_detailed_info = mysqli_real_escape_string($db, $_POST['property_detailed_info']);

    $property_1_features = mysqli_real_escape_string($db, $_POST['property_1_features']);
    $property_2_features = mysqli_real_escape_string($db, $_POST['property_2_features']);
    $property_3_features = mysqli_real_escape_string($db, $_POST['property_3_features']);
    $property_4_features = mysqli_real_escape_string($db, $_POST['property_4_features']);
    $property_5_features = mysqli_real_escape_string($db, $_POST['property_5_features']);
    $property_6_features = mysqli_real_escape_string($db, $_POST['property_6_features']);

    $property_sales_price = mysqli_real_escape_string($db, $_POST['property_sales_price']);
    $property_rental_price = mysqli_real_escape_string($db, $_POST['property_rental_price']);
    $property_room_size_description = mysqli_real_escape_string($db, $_POST['property_room_size_description']);
    $property_indoor_room_description = mysqli_real_escape_string($db, $_POST['property_indoor_room_description']);
    $property_outdoor_room_description = mysqli_real_escape_string($db, $_POST['property_outdoor_room_description']);
    $property_status = mysqli_real_escape_string($db, $_POST['property_status']);
    $property_type = mysqli_real_escape_string($db, $_POST['property_type']);
    $property_publicy = isset($_POST['property_publicy']) ? 1 : 0;



    $targetDirectory = "property_photos/";

    $property_main_photo = $_FILES['property_main_photo']['name'];
    $property_1_promo_video = $_FILES['property_1_promo_video']['name'];
    $property_2_promo_photo = $_FILES['property_2_promo_photo']['name'];
    $property_attribute_photo = $_FILES['property_attribute_photo']['name'];
    $property_1_photos = $_FILES['property_1_photos']['name'];
    $property_2_photos = $_FILES['property_2_photos']['name'];
    $property_3_photos = $_FILES['property_3_photos']['name'];
    $property_4_photos = $_FILES['property_4_photos']['name'];
    $property_5_photos = $_FILES['property_5_photos']['name'];



    $property_main_photo_real_estate = $targetDirectory . basename($_FILES['property_main_photo']['name']);
    $property_1_promo_video_real_estate = $targetDirectory . basename($_FILES['property_1_promo_video']['name']);
    $property_2_promo_photo_real_estate = $targetDirectory . basename($_FILES['property_2_promo_photo']['name']);
    $property_attribute_photo_real_estate = $targetDirectory . basename($_FILES['property_attribute_photo']['name']);
    $property_1_photos_real_estate = $targetDirectory . basename($_FILES['property_1_photos']['name']);
    $property_2_photos_real_estate = $targetDirectory . basename($_FILES['property_2_photos']['name']);
    $property_3_photos_real_estate = $targetDirectory . basename($_FILES['property_3_photos']['name']);
    $property_4_photos_real_estate = $targetDirectory . basename($_FILES['property_4_photos']['name']);
    $property_5_photos_real_estate = $targetDirectory . basename($_FILES['property_5_photos']['name']);


    $property_main_photo_real_estate_img = $property_main_photo_real_estate;
    $property_1_promo_video_real_estate_img = $property_1_promo_video_real_estate;
    $property_2_promo_photo_real_estate_img = $property_2_promo_photo_real_estate;
    $property_attribute_photo_real_estate_img = $property_attribute_photo_real_estate;
    $property_1_photos_real_estate_img = $property_1_photos_real_estate;
    $property_2_photos_real_estate_img = $property_2_photos_real_estate;
    $property_3_photos_real_estate_img = $property_3_photos_real_estate;
    $property_4_photos_real_estate_img = $property_4_photos_real_estate;
    $property_5_photos_real_estate_img = $property_5_photos_real_estate;



    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR.utf8'); // Türkçe dil desteği için locale ayarı
    $gunler = array(
        'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'
    );
    $aylar = array(
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $currentDateTime = $gunAyYil . ' ' . $saatDakika;

    $property_title_query = "SELECT * FROM  property_attributes WHERE `property_name`='$property_name'";
    $resultPropertyTitleQuery = mysqli_query($db, $property_title_query);
    $resultAlreadyControl = mysqli_fetch_assoc($resultPropertyTitleQuery);

    if ($resultAlreadyControl) {
        if ($resultAlreadyControl['property_name'] === $property_name) {
            array_push($errors, "This property is already available in the system!");
        }
    }


    if (count($errors) == 0) {
        $query = "INSERT INTO property_attributes (branch_id,personnel_id,property_name,property_province,property_district,property_neighbourhood,property_address_link,property_address_code,property_sales_price,property_rental_price,property_brief_info,property_detailed_info,property_1_features,property_2_features,property_3_features,property_4_features,property_5_features,property_6_features,property_size,property_bedroom_count,property_bathroom_count,property_livingroom_count,property_room_size_description,property_indoor_room_description,property_outdoor_room_description,property_status,property_type,currentDateTime,property_publicy) 
        VALUES ('$branch_id','$personnel_id','$property_name','$property_province','$property_district','$property_neighbourhood','$property_address_link','$property_address_code','$property_sales_price','$property_rental_price','$property_brief_info','$property_detailed_info','$property_1_features','$property_2_features','$property_3_features','$property_4_features','$property_5_features','$property_6_features','$property_size','$property_bedroom_count','$property_bathroom_count','$property_livingroom_count','$property_room_size_description','$property_indoor_room_description','$property_outdoor_room_description','$property_status','$property_type','$currentDateTime','$property_publicy')";
        if ($db->query($query)=== TRUE ) {
            $property_id = $db ->insert_id;

            $query_property_photos = "INSERT INTO property_photos (property_id,property_main_photo,property_1_promo_video,property_2_promo_photo,property_attribute_photo,property_1_photos,property_2_photos,property_3_photos,property_4_photos,property_5_photos) 
            VALUES ('$property_id','$property_main_photo_real_estate_img','$property_1_promo_video_real_estate_img','$property_2_promo_photo_real_estate_img','$property_attribute_photo_real_estate_img','$property_1_photos_real_estate_img','$property_2_photos_real_estate_img','$property_3_photos_real_estate_img','$property_4_photos_real_estate_img','$property_5_photos_real_estate_img')";

            $db->query($query_property_photos);
            }

            header('location: app-property-list.php');
    }
}



$tableNamePropertyAttributes = "property_attributes";
$columnsPropertyAttributes = ['property_id', 'branch_id', 'personnel_id', 'property_name', 'property_province', 'property_district', 'property_neighbourhood', 'property_address_link', 'property_address_code', 'property_sales_price', 'property_rental_price', 'property_brief_info', 'property_detailed_info', 'property_1_features', 'property_2_features', 'property_3_features', 'property_4_features', 'property_5_features', 'property_6_features', 'property_size', 'property_bedroom_count', 'property_bathroom_count', 'property_livingroom_count', 'property_room_size_description', 'property_indoor_room_description', 'property_outdoor_room_description', 'property_status', 'property_type', 'currentDateTime', 'property_publicy'];


$tableNamePropertyPhotos = "property_photos";
$columnsPropertyPhotos = ['property_photo_id', 'property_id', 'property_main_photo', 'property_1_promo_video', 'property_2_promo_photo', 'property_attribute_photo', 'property_1_photos', 'property_2_photos', 'property_3_photos', 'property_4_photos', 'property_5_photos'];

$fetchDataPropertyAttributes = fetch_data_property_attributes($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);

function fetch_data_property_attributes($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " ORDER BY property_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Mulk Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

function fetch_data_property_photos($db, $tableName, $columns, $id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE property_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}











// VERITABANINA MULK EKLEME KODLARI
if (isset($_POST['blog-add'])) {
    $personnel_id = mysqli_real_escape_string($db, $_POST['personnel_id']);
    $personnel_name = mysqli_real_escape_string($db, $_POST['personnel_name']);
    $blog_post_title = mysqli_real_escape_string($db, $_POST['blog_post_title']);

    $blog_post_short_description = mysqli_real_escape_string($db, $_POST['blog_post_short_description']);
    $blog_post_category = mysqli_real_escape_string($db, $_POST['blog_post_category']);
    $blog_content_first_title = mysqli_real_escape_string($db, $_POST['blog_content_first_title']);
    $blog_content_first_description = mysqli_real_escape_string($db, $_POST['blog_content_first_description']);
    $blog_quote = mysqli_real_escape_string($db, $_POST['blog_quote']);
    $blog_quote_owner = mysqli_real_escape_string($db, $_POST['blog_quote_owner']);
    $blog_content_second_title = mysqli_real_escape_string($db, $_POST['blog_content_second_title']);
    $blog_content_second_description = mysqli_real_escape_string($db, $_POST['blog_content_second_description']);
    $blog_content_items_1 = mysqli_real_escape_string($db, $_POST['blog_content_items_1']);
    $blog_content_items_2 = mysqli_real_escape_string($db, $_POST['blog_content_items_2']);
    $blog_content_items_3 = mysqli_real_escape_string($db, $_POST['blog_content_items_3']);
    $blog_content_items_4 = mysqli_real_escape_string($db, $_POST['blog_content_items_4']);
    $blog_content_third_description = mysqli_real_escape_string($db, $_POST['blog_content_third_description']);
    $blog_keywords = mysqli_real_escape_string($db, $_POST['blog_keywords']);

    $blog_publicy = isset($_POST['blog_publicy']) ? 1 : 0;
    $blog_comment_status = isset($_POST['blog_comment_status']) ? 1 : 0;



    $targetDirectory = "blog_photos/";

    $blog_270x406 = $_FILES['blog_270x406']['name'];
    $blog_82x112 = $_FILES['blog_82x112']['name'];
    $blog_850x546 = $_FILES['blog_850x546']['name'];
    $blog_300x213 = $_FILES['blog_300x213']['name'];

    $blog_270x406_real_estate = $targetDirectory . basename($_FILES['blog_270x406']['name']);
    $blog_82x112_real_estate = $targetDirectory . basename($_FILES['blog_82x112']['name']);
    $blog_850x546_real_estate = $targetDirectory . basename($_FILES['blog_850x546']['name']);
    $blog_300x213_real_estate = $targetDirectory . basename($_FILES['blog_300x213']['name']);

    $blog_270x406_real_estate_img = $blog_270x406_real_estate;
    $blog_82x112_real_estate_img = $blog_82x112_real_estate;
    $blog_850x546_real_estate_img = $blog_850x546_real_estate;
    $blog_300x213_real_estate_img = $blog_300x213_real_estate;

    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR.utf8'); // Türkçe dil desteği için locale ayarı
    $gunler = array(
        'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'
    );
    $aylar = array(
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $currentDateTime = $gunAyYil . ' ' . $saatDakika;


    $blog_title_query = "SELECT * FROM  blog_details WHERE `blog_post_title`='$blog_post_title'";
    $resultBlogTitleQuery = mysqli_query($db, $blog_title_query);
    $resultAlreadyControl = mysqli_fetch_assoc($resultBlogTitleQuery);

    if ($resultAlreadyControl) {
        if ($resultAlreadyControl['blog_post_title'] === $blog_post_title) {
            array_push($errors, "This blog is already available in the system!");
        }
    }


    if (count($errors) == 0) {
        $query = "INSERT INTO blog_details (personnel_id,personnel_name,blog_date,blog_post_title,blog_post_short_description,blog_post_category,blog_content_first_title,blog_content_first_description,blog_quote,blog_quote_owner,blog_content_second_title,blog_content_second_description,blog_content_items_1,blog_content_items_2,blog_content_items_3,blog_content_items_4,blog_content_third_description,blog_keywords,blog_publicy,blog_comment_status) 
        VALUES ('$personnel_id','$personnel_name','$currentDateTime','$blog_post_title','$blog_post_short_description','$blog_post_category','$blog_content_first_title','$blog_content_first_description','$blog_quote','$blog_quote_owner','$blog_content_second_title','$blog_content_second_description','$blog_content_items_1','$blog_content_items_2','$blog_content_items_3','$blog_content_items_4','$blog_content_third_description','$blog_keywords','$blog_publicy','$blog_comment_status')";


        if ($db->query($query) === TRUE) {
            $blog_id = $db->insert_id;

            $query_blog_photos = "INSERT INTO blog_photos (blog_id,blog_270x406,blog_82x112,blog_850x546,blog_300x213) 
            VALUES ('$blog_id','$blog_270x406_real_estate_img','$blog_82x112_real_estate_img','$blog_850x546_real_estate_img','$blog_300x213_real_estate_img')";

            $db->query($query_blog_photos);
        }

        header('location: app-blog-list.php');
    }
}


$tableNameBlog = "blog_details";
$columnsBlog = ['blog_id', 'personnel_id', 'personnel_name', 'blog_date', 'blog_post_title', 'blog_post_short_description', 'blog_post_category', 'blog_content_first_title', 'blog_content_first_description', 'blog_quote', 'blog_quote_owner', 'blog_content_second_title', 'blog_content_second_description', 'blog_content_items_1', 'blog_content_items_2', 'blog_content_items_3', 'blog_content_items_4', 'blog_content_third_description', 'blog_keywords', 'blog_publicy', 'blog_comment_status'];


$tableNameBlogPhotos = "blog_photos";
$columnsBlogPhotos = ['blog_photo_id', 'blog_id', 'blog_270x406', 'blog_82x112', 'blog_850x546', 'blog_300x213'];

$fetchDataBlogDetails = fetch_data_blog($db, $tableNameBlog, $columnsBlog);

function fetch_data_blog($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " ORDER BY blog_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Mulk Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

function fetch_data_blog_photos($db, $tableName, $columns, $id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE blog_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


// VERITABANINDAN PERSONEL SILME KODLARI
if (isset($_GET['deleteBlog'])) {
    $id = validate($_GET['deleteBlog']);
    $condition = ['blog_id' => $id];
    $deleteMsg = delete_data_blog($db, $tableNameBlog, $condition);
    header("location:app-blog-list.php");
}

function delete_data_blog($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}




$tableNameComment = "blog_comment";
$columnsComment = ['comment_id', 'blog_id', 'comment_name', 'comment_email', 'comment', 'comment_date_time', 'comment_status'];

$fetchDataComment = fetch_data_comment_list($db, $tableNameComment, $columnsComment);

function fetch_data_comment_list($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " ORDER BY comment_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


// VERITABANINDA TURKCE YORUM GUNCELLEME KODLARI
if (isset($_GET['deactiveCommentList'])) {
    $comment_id = validate($_GET['deactiveCommentList']);
    $comment_status = "0";

    $select_query = "SELECT * FROM blog_comment WHERE comment_id = '$comment_id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $update_query = "UPDATE blog_comment SET 
        comment_status = $comment_status
        WHERE comment_id = '$comment_id'";

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-comment-list.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}


function delete_comment($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
        header('location: app-comment-list.php');
    } else {
        $msg = $db->error;
    }
    return $msg;
}



