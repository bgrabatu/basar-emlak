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


$tableNamePropertyAttributes = "property_attributes";
$columnsPropertyAttributes = ['property_id', 'branch_id', 'personnel_id', 'property_name', 'property_province', 'property_district', 'property_neighbourhood', 'property_address_link', 'property_address_code', 'property_sales_price', 'property_rental_price', 'property_brief_info', 'property_detailed_info', 'property_1_features', 'property_2_features', 'property_3_features', 'property_4_features', 'property_5_features', 'property_6_features','property_size', 'property_bedroom_count', 'property_bathroom_count', 'property_livingroom_count', 'property_room_size_description', 'property_indoor_room_description', 'property_outdoor_room_description', 'property_status', 'property_type', 'currentDateTime', 'property_publicy'];


$tableNamePropertyPhotos = "property_photos";
$columnsPropertyPhotos = ['property_photo_id', 'property_id', 'property_main_photo', 'property_1_promo_video', 'property_2_promo_photo', 'property_attribute_photo', 'property_1_photos', 'property_2_photos', 'property_3_photos', 'property_4_photos', 'property_5_photos'];


// SUBE LISTESINE VERI CEKME KODLARI
$fetchDataPropertyAttributesRent = fetch_data_property_attributes_rent($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);
$fetchDataPropertyAttributesSale = fetch_data_property_attributes_sale($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);
$fetchDataPropertyAttributes = fetch_data_property_attributes($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);
$fetchDataPropertyAttributesLimit12 = fetch_data_property_attributes_limit_12($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);
$fetchDataPropertyAttributesLimit8 = fetch_data_property_attributes_limit_8($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);

$propertyTypes = property_types($db, $tableNamePropertyAttributes, $columnsPropertyAttributes);


function fetch_data_property_attributes_rent($db, $tableName, $columns)
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
        $query .= " WHERE property_status = 'Rent'";
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

function fetch_data_property_attributes_sale($db, $tableName, $columns)
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
        $query .= " WHERE property_status = 'Sale'";
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



function fetch_data_property_attributes_limit_12($db, $tableName, $columns)
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
        $query .= " ORDER BY property_id DESC LIMIT 6";
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

function fetch_data_property_attributes_limit_8($db, $tableName, $columns)
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
        $query .= " ORDER BY property_id DESC LIMIT 8";
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

function property_types($db, $tableName, $columns)
{
    if (empty($db)) {
        return "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        return "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        return "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT DISTINCT property_type FROM $tableName ORDER BY property_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $propertyTypes = array();
                while ($row = $result->fetch_assoc()) {
                    $propertyTypes[] = $row['property_type'];
                }
                return $propertyTypes;
            } else {
                return "No properties found!";
            }
        } else {
            return "Query error: " . $db->error;
        }
    }
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


$tableNameBranches = "branches";
$columnsBranches = ['branch_id', 'branch_name', 'branch_owner', 'branch_address', 'branch_phone', 'branch_email'];

$fetchDataBranches = fetch_data_branches($db, $tableNameBranches, $columnsBranches);

function fetch_data_branches($db, $tableName, $columns)
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

// ANASITEYE VERITABANINDAN URUN DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $property_id = end($url_segments);
    $id = validate($property_id);
    $fetchDataPropertyAttributesDetails = fetch_data_property_attributes_detail($db, $tableNamePropertyAttributes, $columnsPropertyAttributes, $id);
    $fetchDataPropertyPhotosDetails = fetch_data_property_attributes_detail($db, $tableNamePropertyPhotos, $columnsPropertyPhotos, $id);
}
function fetch_data_property_attributes_detail($db, $tableName, $columns, $id)
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









$tableNameBlog = "blog_details";
$columnsBlog = ['blog_id','personnel_id', 'personnel_name', 'blog_date', 'blog_post_title', 'blog_post_short_description', 'blog_post_category', 'blog_content_first_title', 'blog_content_first_description', 'blog_quote', 'blog_quote_owner', 'blog_content_second_title', 'blog_content_second_description', 'blog_content_items_1', 'blog_content_items_2', 'blog_content_items_3', 'blog_content_items_4', 'blog_content_third_description', 'blog_keywords', 'blog_publicy', 'blog_comment_status'];


$tableNameBlogPhotos = "blog_photos";
$columnsBlogPhotos = ['blog_photo_id', 'blog_id', 'blog_270x406', 'blog_82x112', 'blog_850x546', 'blog_300x213'];

$fetchDataBlogDetails = fetch_data_blog($db, $tableNameBlog,$columnsBlog, isset($_GET['category_name']) ? $_GET['category_name'] : null);
$fetchDataBlogDetailsLimit3 = fetch_data_blog_limit_8($db, $tableNameBlog, $columnsBlog);
$categories = fetch_unique_blog_categories($db, "blog_details", "blog_post_category");


function fetch_unique_blog_categories($db, $tableName, $categoryColumn)
{
    if (empty($db)) {
        return "Database connection error";
    } elseif (empty($categoryColumn)) {
        return "Category column name is empty";
    } elseif (empty($tableName)) {
        return "Table name is empty";
    }

    $query = "SELECT DISTINCT $categoryColumn FROM $tableName WHERE blog_publicy = 1 ORDER BY blog_id";
    $result = $db->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $categories = array();
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row[$categoryColumn];
            }
            return $categories;
        } else {
            return "No categories found";
        }
    } else {
        return "Query error: " . $db->error;
    }
}

function fetch_data_blog($db, $tableName, $columns, $category = null)
{
    if (empty($db)) {
        return "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        return "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        return "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE blog_publicy = 1";
        if (!is_null($category)) {
            $query .= " AND blog_post_category = ?";
        }
        $query .= " ORDER BY blog_id DESC";

        $stmt = $db->prepare($query);

        if ($stmt) {
            if (!is_null($category)) {
                $stmt->bind_param("s", $category);
            }

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $results = array();
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                return $results;
            } else {
                return "No data found";
            }
        } else {
            return "Query preparation error: " . $db->error;
        }
    }
}


function fetch_data_blog_limit_8($db, $tableName, $columns)
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
        $query .= " WHERE blog_publicy = 1";
        $query .= " ORDER BY blog_id DESC LIMIT 3";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Blog Bulunamadi!";
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

// ANASITEYE VERITABANINDAN URUN DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $blog_id = end($url_segments);
    $id = validate($blog_id);
    $fetchDataBlogDetailsPage = fetch_data_blog_detail($db, $tableNameBlog, $columnsBlog, $id);
    $fetchDataBlogPhotosDetailsPage = fetch_data_blog_detail($db, $tableNameBlogPhotos, $columnsBlogPhotos, $id);
}
function fetch_data_blog_detail($db, $tableName, $columns, $id)
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






if (isset($_POST['comment-add'])) {
    $blog_id  = isset($_POST['blog_id']) ? mysqli_real_escape_string($db, $_POST['blog_id']) : '';
    $comment_name = isset($_POST['comment_name']) ? mysqli_real_escape_string($db, $_POST['comment_name']) : '';
    $comment_email = isset($_POST['comment_email']) ? mysqli_real_escape_string($db, $_POST['comment_email']) : '';
    $comment = isset($_POST['comment']) ? mysqli_real_escape_string($db, $_POST['comment']) : '';
    $comment_status = "0";


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


    if (empty($comment_name) && empty($comment_email) && empty($comment)) {
        array_push($errors, "Please Fill in the Blanks!");
    }

    $product_comment_query = "SELECT * FROM blog_comment WHERE `comment`='$comment'";
    $resultProductCommentQuery = mysqli_query($db, $product_comment_query);
    $productCommentAlreadyControl = mysqli_fetch_assoc($resultProductCommentQuery);

    if ($productCommentAlreadyControl) {
        if ($productCommentAlreadyControl['comment_name'] === $comment_name) {
            array_push($errors, "This Comment Already Exists in the System");
        }
    }


    if (count($errors) == 0) {
        $query = "INSERT INTO blog_comment (blog_id,comment_name,comment_email,comment,comment_date_time,comment_status) VALUES ('$blog_id', '$comment_name', '$comment_email', '$comment', '$currentDateTime', '$comment_status')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header("Location: blog-classic.php");

        } else {
            $errors[] = "Comment could not be loaded: " . mysqli_error($db);
        }
    }
}



$tableNameComment = "blog_comment";

if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $blog_id = end($url_segments);
    $id = validate($blog_id);
    $condition = ['blog_id' => $id];
    $columnsComment = ['comment_id', 'blog_id', 'comment_name', 'comment_email', 'comment', 'comment_date_time', 'comment_status'];
    $fetchDataBlogDetailsComment = fetch_data_comment($db, $tableNameComment, $columnsComment, $condition);
}

function fetch_data_comment($db, $tableName, $columns, $condition)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $conditionData = '';
        $i = 0;
        foreach ($condition as $index => $data) {
            $and = ($i > 0) ? ' AND ' : '';
            $conditionData .= $and . $index . " = " . "'" . $data . "'";
            $i++;
        }
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE " . $conditionData;
        $query .= " AND comment_status = 1";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}