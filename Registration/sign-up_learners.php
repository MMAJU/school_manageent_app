<?php
require_once('../PhpConnections/connection.php');
require_once("../classes/learnersInfo.php");
require_once('../utilites/Randomizer.php');
require_once('../classes/Arms.php');
require_once('../classes/SchoolClass.php');
require_once('../classes/Annex.php');

$GenerateValue = new Randomizer();
$unique_id = $GenerateValue->generate_random_password(7);
$password = $GenerateValue->generate_random_password(10);


$learner = new learners();
$classes = new SchoolClass();
$arm = new Arms();
$annex = new Annex();

?>

<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>Web-edu</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/dozzy-1/14.png)">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="../../demo3/dist/index.html" class="mb-12">
                    <!-- <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px" /> -->
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                        <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if (isset($_POST["btn"])) {
                                        $first_name = $_POST["first_name"];
                                        $Second_name = $_POST["Second_name"];
                                        $SurName = $_POST["Sur_Name"];
                                        $Sex = $_POST["sex"];
                                        $Date_of_birth = $_POST["D_O_B"];
                                        $Guidance_Email = $_POST["email"];
                                        $Guidance_phone_No = $_POST["phone_No"];
                                        $address = $_POST["address"];
                                        $State_Of_origin = $_POST["state_of_origin"];
                                        $Blood_Group = $_POST["blood_group"];
                                        $Geno_Type = $_POST["Geno_Type"];
                                        $Guidance_Occupation = $_POST["Guidance_Occup"];
                                        $Second_name = $_POST["Second_name"];
                                        $unique_id = $_POST["student_unique_number"];
                                        $unique_password = $_POST["pass"];
                                        $unique_password = password_hash($unique_password, PASSWORD_BCRYPT);
                                        $class_id =  $_POST["class_id"];
                                        $arm_id =  $_POST["arm_id"];
                                        $annex_id =  $_POST["annex_id"];
                                        //$myImag  = trim($_POST["file"]);
                                       $targetDirectory = "../uploads/";
                                       $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

                                       
                                       
                                     
                                       
                                       $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                                       // echo "$targetFile .... am gere";
                                    
                                       move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

                                        
                                        $learner->insertLearner($first_name, $Second_name, $SurName, $Sex, $Date_of_birth, $Guidance_Email, $Guidance_phone_No, $address, $State_Of_origin, $Blood_Group, $Geno_Type, $Guidance_Occupation,$unique_id, $unique_password,$class_id, $arm_id, $annex_id, $targetFile);
                                    }
                                    }                     
                        ?>
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Create learners Account</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <a class="btn btn-light-primary fw-bolder w-100 mb-10" href="./Dashboard.php">
							Back to Dashboard</a>
                        <!--end::Action-->
                        <!--begin::Separator-->





                        <!-- <div class="col-xl-6">
							<label for="myfile">Select a file:</label>
							<input type="file" accept="image/*" />
						     </div> -->
                        <!-- <div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div> -->
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="first_name" name="first_name" autocomplete="off" />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Second name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="Second_name" name="Second_name" autocomplete="off" /><br><br>
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6"> SurName</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="Sur_Name" name="Sur_Name" autocomplete="off" />
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Address</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="address" name="address" autocomplete="off" />
                                <br><br>
                            </div>

                            <div class="col-xl-4">
                                <label class="form-label fw-bolder text-dark fs-6"> Class</label>
                                <select  class="form-control form-control-lg form-control-solid" name="class_id" id = "class_id" autocomplete="off">
                                                <option value = ""> Select Class </option>
												<?php $classes->dropdownClass(); ?>
											</select>
                            </div>


                            <div class="col-xl-4">
                                <label class="form-label fw-bolder text-dark fs-6">Arm</label>
                                <select  class="form-control form-control-lg form-control-solid" name="arm_id" id = "arm_id" autocomplete="off">
                                                <option value = ""> Select Arm </option>
												<?php $arm->dropdownArm(); ?>
											</select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label fw-bolder text-dark fs-6">Annex</label>
                                <select  class="form-control form-control-lg form-control-solid" name="annex_id" id = "annex_id" autocomplete="off">
                                                <option value = ""> Select Annex </option>
												<?php $annex->dropdownAnnex(); ?>
											</select>
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Date Of Birth</label>
                                <input class="form-control form-control-lg form-control-solid" type="date" placeholder="" id="D_O_B" name="D_O_B" autocomplete="off" />
                                <br><br>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Sex</label>
                                <select class="form-control form-control-lg form-control-solid" type="text" id="sex" name="sex" autocomplete="off">
                                    <option value="">Select sex</option>
                                    <option value="f">Female</option>
                                    <option value="m">Male</option>

                                </select>
                            </div>



                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Select Image</label>
                                <input class="form-control form-control-lg form-control-solid" type="file" id="file" name="file" accept="image/*"><br><br>
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Phone Num</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="phone_No" name="phone_No" autocomplete="off" />
                                <br><br>
                            </div>



                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">State of origin</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="state_of_origin" name="state_of_origin" autocomplete="off" /><br><br>
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Blood group</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="blood_group" name="blood_group" autocomplete="off" /><br><br>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Genotype</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="Geno_Type" name="Geno_Type" autocomplete="off" /><br><br>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Guidance Occupation</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="Guidance_Occup" name="Guidance_Occup" autocomplete="off" /><br><br>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Student Unique Number</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="student_unique_number" value="<?php echo $unique_id; ?>" name="student_unique_number" autocomplete="off" readonly /><br><br>
                            </div>  <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="pass" name="pass" value="<?php echo $password; ?>" autocomplete="off"  readonly/><br><br>
                            </div>

                            


                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Guidance-Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" id="email" name="email" autocomplete="off" />
                        </div>


                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--end::Input group=-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="row fv-row mb-7">
                            <div id="error" class="alert alert-danger" style="display: none;" role="alert"></div>
                        </div>


                        <div class="row fv-row mb-7">
                            <div class="col-xl-5">
                                <input type="submit" name="btn" class="btn btn-lg btn-primary" value="Submit" />
                            </div>

                            <div class="col-xl-7">
                                <a href="Registration/batch_Upload.php" class="btn btn-lg btn-primary"> Batch Upload Submit </a>
                            </div>
                        </div>

                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        let hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script>
        function isValidEmail(email) {
            let regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function validateForm() {

            let first_name = $.trim($("#first_name").val());
            let Second_name = $.trim($("#Second_name").val());
            let SurName = $.trim($("#Sur_Name").val());
            let Sex = $.trim($("#sex").val());
            let Date_of_birth = $.trim($("#D_O_B").val());
            let Guidance_Email = $.trim($("#email").val());
            let phone_No = $.trim($("#phone_No").val());
            let address = $.trim($("#address").val());
            let State_Of_origin = $.trim($("#state_of_origin").val());
            let Blood_Group = $.trim($("#blood_group").val());
            let Geno_Type = $.trim($("#Geno_Type").val());
            let Guidance_Occupation = $.trim($("#Guidance_Occup").val());
            let class_id = $.trim($("#class_id").val());
            let arm_id = $.trim($("#arm_id").val());
            let annex_id = $.trim($("#annex_id").val());
            let myImag = $.trim($("#my_Image").val());





            // validate fname
            if (first_name == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Enter First name"
                $("#first_name").focus();
                return false;
            } else if (first_name.length < 3) {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "First Name must be at least 3 character"
                $("#first_name").focus();
                return false;
            }

            // validate Scnd-name
            if (Second_name == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Enter middle name"
                $("#Second_name").focus();
                return false;
            } else if (Second_name.length < 3) {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Middle name must be atleast 3 character."
                $("#Second_name").focus();
                return false;
            }



            // validate Suname
            if (SurName == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Enter last name"
                $("#Second_namee").focus();
                return false;
            } else if (Second_name.length < 3) {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Last name must be atleast 3 character."
                $("#SurName").focus();
                return false;
            }

            // validate Sex
            if (Sex == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Sex is required"

                $("#sex").focus();
                return false;
            }

            // validate Phone number
            if (phone_No == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Phone Number is required"

                $("#phone_No").focus();
                return false;
            } else if (phone_No.length != 11) {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Invalid phone number format"
                $("#phone_No").focus();
                return false;
            }

            // validate State of origin
            if (State_Of_origin == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "State of origin is required"

                $("#state_of_origin").focus();
                return false;
            }

            if (class_id == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Class is required"

                $("#class_id").focus();
                return false;
            }
            if (arm_id == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Arm is required"

                $("#arm_id").focus();
                return false;
            }
            if (annex_id == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Annex is required"

                $("#annex_id").focus();
                return false;
            }
            // validate Genotype
            // if (Geno_Type == "") {
            //     document.getElementById('error').style['display'] = 'block';
            //     document.getElementById('error').innerHTML = "Genotype is required"

            //     $("#Geno_Type").focus();
            //     return false;
            // }

            // validate Guidance Occupation 
            if (Guidance_Occupation == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Guidance Occupation is required"

                $("#Guidance_Occup").focus();
                return false;
            }




            // validate Blood Group
            if (Blood_Group == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Blood Group is required"

                $("#blood_group").focus();
                return false;
            }



            // validate Address
            if (address == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Address is required"

                $("#address").focus();
                return false;
            }


            // validate staff role
            if (staff_role == "") {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Select staff role"

                $("#staff_role").focus();
                return false;
            }



            // validate email
            if (!isValidEmail(Guidance_Email)) {
                document.getElementById('error').style['display'] = 'block';
                document.getElementById('error').innerHTML = "Invalid Mail format"
                $("#email").focus();
                return false;
            }


            return true;
        }
    </script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <!--<script src="assets/js/custom/authentication/sign-up/general.js"></script>-->
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>