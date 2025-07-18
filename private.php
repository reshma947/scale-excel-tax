<?php 
include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Limited (PVT LTD) Company Registration in India</title>
    <link rel="stylesheet" href="./css/private.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./static/css/mdb.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
       
        .mega-menu-left-list-items p,
        .mega-menu-right-list-items a {
            border: none;
        }

        .mega-menu {
            background-color: #f7f7f7;
            max-height: 500px;
            overflow: scroll;
            /* overflow-x: hidden; */
        }

        .mega-menu-left-list-items p:hover {
            background-color: #ffff;
            color: #119083;
            cursor: pointer;
        }

        .mega-menu-right-list-items a:nth-child(1),.bold {
            font-size: 18px;
            font-weight: bold;
            width: max-content;
            /* border-bottom: solid 1px #007bff; */
            /* padding-left: 0px; */
        }

        .mega-menu-right-list-items a:hover {
            color: #119083;
            background-color: #f7f7f7;
        }

        .mega-menu {
            width: 52%;
        }

        @media (max-width: 992px) {
            .mega-menu {
                width: 100%;
            }
        }

        /* width */
        ::-webkit-scrollbar {
            width: 2px;
        }

      
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <a class="me-auto" href="./index.html">
                <img src="./css/images/new logo.png" alt="Scalexcel Logo" style="width: 200px;" />
            </a>
            <button data-mdb-button-init class="float-end navbar-toggler px-0" type="button" data-mdb-collapse-init
                data-mdb-target="#navbarExample2" aria-controls="navbarExample2" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarExample2">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto ps-lg-0" style="padding-left: 0.15rem">
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Business Setup
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-business-setup"
                            aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="companyRegistration" onclick="displayMenuItem(event)"
                                                onmouseover="getListItems(event);"><i class="far fa-building"></i>
                                                Company Registration <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="internationalBusinessSetup" onmouseover="getListItems(event);">
                                                <i class="far fa-building"></i>
                                                International Business Setup <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="licences&Registration" onmouseover="getListItems(event);">
                                                <i class="far fa-building"></i>
                                                Licenses & Registrations <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3" id="webDevelopment"
                                                onmouseover="getListItems(event);"><i class="far fa-building"></i>
                                                Web Development <i class="float-end pt-1 fas fa-angle-right"></i></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="bussinessSetuplistItems">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Tax & Compliance
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-tax-compliance"
                            aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="gstandOtherIndirectTax" onclick="displayMenuItemTax(event)"
                                                onmouseover="getListItemsTax(event);"><i class="far fa-building"></i>
                                                GST and Other Indirect Tax <i
                                                    class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="changesinPvtLtdCompany" onmouseover="getListItemsTax(event);">
                                                <i class="far fa-building"></i>
                                                Changes in Pvt Ltd Company <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="changesinLimitedLiabilityPartnership"
                                                onmouseover="getListItemsTax(event);"><i class="far fa-building"></i>
                                                Changes In Limited Liability Partnership <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="mandatoryAnnualFilings" onmouseover="getListItemsTax(event);">
                                                <i class="far fa-building"></i>
                                                Mandatory Annual Filings <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3" id="labourCompliance"
                                                onmouseover="getListItemsTax(event);"><i class="far fa-building"></i>
                                                Labour Compliance <i class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3" id="accounting&Tax"
                                                onmouseover="getListItemsTax(event);"><i class="far fa-building"></i>
                                                Accounting & Tax <i class="float-end pt-1 fas fa-angle-right"></i></p>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="tax&ComplianceListItems">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Trademark & IP
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-trademark-ip"
                            aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="tradeMark" onclick="displayMenuItemTrademark(event)"
                                                onmouseover="getListItemsTrademark(event);"><i
                                                    class="far fa-building"></i>
                                                Trademark <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3" id="copyRight"
                                                onmouseover="getListItemsTrademark(event);"><i class="far fa-building"></i>
                                                Copyright <i class="float-end pt-1 fas fa-angle-right"></i></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="trademark&IpListItems">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-others" aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="ngo" onclick="displayMenuItemOthers(event)"
                                                onmouseover="getListItemsOthers(event);"><i class="far fa-building"></i>
                                                NGO <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="fullyFledgeMoneyChangesLicence" onmouseover="getListItemsOthers(event);">
                                                <i class="far fa-building"></i>
                                                Fully Fledge Money Changes Licence <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="ca/Cs" onclick="displayMenuItemOthers(event)"
                                                onmouseover="getListItemsOthers(event);"><i class="far fa-building"></i>
                                                CA/CS <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                            id="rera" onclick="displayMenuItemOthers(event)"
                                            onmouseover="getListItemsOthers(event);"><i class="far fa-building"></i>
                                            RERA <i class="float-end pt-1 fas fa-angle-right"></i>
                                        </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="othersListItems">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-resources" aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="taxation" onclick="displayMenuItemResources(event)"
                                                onmouseover="getListItemsResources(event);"><i class="far fa-building"></i>
                                                Taxation <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="accounting" onclick="displayMenuItemResources(event)"
                                                onmouseover="getListItemsResources(event);">
                                                <i class="far fa-building"></i>
                                                Accounting <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="businessConsulting" onclick="displayMenuItemResources(event)"
                                                onmouseover="getListItemsResources(event);"><i class="far fa-building"></i>
                                                Business Consulting <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="resourcesListItems">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <a class="nav-link fw-bold" href="./blog.html" id="navbarDropdown"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Blog
                    </a>

                    <li class="nav-item dropdown position-static">
                        <a data-mdb-dropdown-init class="nav-link fw-bold" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu mega-menu mt-0 mega-menu-bars" aria-labelledby="navbarDropdown"
                            style="border-top-left-radius: 0; border-top-right-radius: 0;">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="mega-menu-left-list-items list-group list-group-flush">
                                            <p class="list-group-item list-group-item-action py-3 me-auto"
                                                id="patnerWithUs" onclick="displayMenuItemBars(event)"
                                                onmouseover="getListItemsBars(event);"><i class="far fa-building"></i>
                                                Patner With Us <i class="float-end pt-1 fas fa-angle-right"></i>
                                            </p>
                                            <p class="list-group-item list-group-item-action py-3"
                                                id="talktoaExpert" onclick="displayMenuItemBars(event)"
                                                onmouseover="getListItemsBars(event);">
                                                <i class="far fa-building"></i>
                                                Talk to a Expert <i
                                                    class="float-end pt-1 fas fa-angle-right"></i></p>
                                          
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                                        <div class="list-group mega-menu-right-list-items list-group-flush"
                                            id="barsListItems">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="fw-bold mb-4">Private Limited (PVT LTD) Company Registration in India</h1>
                <div class="d-lg-flex pt-2">
                    <i class="fa fa-circle-check text-green pt-2 pe-2"></i>
                    <p class="fs-5"><b>Affordable & Transparent:</b> Registration starting at ₹999 + Govt Fee with no
                        hidden charges.</p>
                </div>
                <div class="d-lg-flex pt-2">
                    <i class="fa fa-circle-check text-green pt-2 pe-2"></i>
                    <p class="fs-5"><b>Comprehensive Compliance:</b> SPICe-INC-32, eMoA-INC-33, eAOA-INC-34 filings,
                        DSC, PAN, and TAN—all handled seamlessly.</p>
                </div>
                <div class="d-lg-flex pt-2">
                    <i class="fa fa-circle-check text-green pt-2 pe-2"></i>
                    <p class="fs-5"><b>Post-Incorporation Benefits:</b> Includes free MSME registration, GST filing
                        support, and banking setup.</p>
                </div>
                <div class="d-lg-flex pt-2">
                    <i class="fa fa-circle-check text-green pt-2 pe-2"></i>
                    <p class="fs-5"><b>Trusted by Startups:</b> Rated #1 for Pvt Ltd Registration, with 100%
                        MCA-compliant filings.</p>
                </div>
            </div>

            <div class="col-lg-4 ms-5 shadow-lg rounded-2 position-relative bg-body-tertiary box">
                <div class="position-absolute top-0 start-0 translate-start">
                    <img src="./css/images/form graphic.png" height="45" width="200">
                </div>
                <form method="post">
                <h4 class="text-center mt-5 pt-2 pb-2">Register Your Company Today</h4>
                    <div class="mb-1">
                      <label class="form-label fw-semibold ps-1">Email</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="mb-1">
                        <label for="mobile" class="col-form-label fw-semibold ps-1">Mobile No</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No">
                      </div>

                      <div class="mb-1">
                        <label for="city" class="col-form-label fw-semibold ps-1">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                      </div>
                <div class="d-lg-flex justify-content-center mt-4 mb-3">
                    <button type="submit" name="getStrted" class="px-5 py-2 text-white back-green border-0 rounded-3 fw-bold fs-6 box">Get Started</button>
                </div>
                  </form>
            </div>

        </div>
    </div>



    <?php
    if(isset($_POST['getStrted']))
    {

        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `register-company` (`email`, `mobile-no`, `city`) VALUES ('$email', '$mobile', '$city');";
        if ($conn->query($sql) === TRUE) {
        echo '<script>Swal.fire({title: "Register completed successfully",icon: "success",draggable: true})</script>';

        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

            }
            
            ?>

    <div class="container-fliud bg-body-secondary">
        <h1 class="text-center fw-bold mt-5 mb-5 pt-5"><span class="text-green">Right Plan</span>
            for Your Business</h1>
        <div class="row row-cols-lg-4 justify-content-center">
            <div class="card m-5 p-2 bg-white border-1 shadow-lg">
                <div class="">
                    <h3 class="fw-bold p-2">Starter</h3>
                </div>
                <div class="ps-2">
                    <p>Perfect for submitting your company application with expert assistance in 14 days.</p>
                </div>

                <div class="ps-2 d-lg-flex">
                    <div class="me-4 mt-1">
                        <h6 class="fw-bold text-decoration-line-through">₹ 1,499</h6>
                    </div>
                    <div class="d-lg-flex mb-0">
                        <div class="pe-1">
                            <img src="https://assets.vakilsearch.com/offer+(1).svg" height="16" width="16">
                        </div>
                        <p class="">₹ 500 off</p>
                    </div>
                </div>
                <div class="border-bottom ps-2">
                    <h1 class="fw-bold">₹ 999</h1>
                    <p class="fs-5 text-warning-emphasis fw-semibold pb-3">+ Govt. Fee (to be paid later)<i
                            class="fa-solid fa-circle-info ps-1"></i></p>
                </div>
                <div class="d-lg-flex border-bottom pt-2 pb-3">
                    <div class="pt-3 ms-3">
                        <img src="https://assets.vakilsearch.com/gift.svg" height="32" width="28">
                    </div>
                    <div class="ms-2 mt-2">
                        <h6 class="mb-0 fs-6">Unlock partner benefits</h6>
                        <h6>Post company incorporation worth Rs 4 lakhs</h6>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="fs-6 px-5 py-3 back-green text-white border fw-bold mt-2 rounded-3 box">Get Started
                    </button>
                </div>
                <div class="px-1">
                    <p class="fs-5 fw-bold pt-3">What you'll get</p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Expert assisted process</p>
                    <div class="d-lg-flex">
                        <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                        <p class="fs-6"> Your company name is filed in just <span class="fw-bold">2 - 4 days</span></p>
                    </div>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> DSC in just <span class="fw-bold">4 -
                            7 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> SPICe+ form filing in <span
                            class="fw-bold">14 days*</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Incorporation Certificate in <span
                            class="fw-bold">28 - 35 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Company <span
                            class="fw-bold">PAN+TAN</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> <span class="fw-bold">DIN</span> for
                        directors</p>
                </div>
            </div>


            <div class="card m-5 p-2 bg-white border-2 shadow-lg position-relative bg-warning-subtle">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="https://assets.vakilsearch.com/mostpopularoffer.svg" height="70" width="190">
                </div>
                <div class="">
                    <h3 class="fw-bold p-2">Standard</h3>
                </div>
                <div class="ps-2">
                    <p>Faster application submission with expert assistance in just 7 days.</p>
                </div>

                <div class="ps-2 d-lg-flex">
                    <div class="me-4 mt-1">
                        <h6 class="fw-bold text-decoration-line-through">₹ 2,999</h6>
                    </div>
                    <div class="d-lg-flex mb-0">
                        <div class="pe-1">
                            <img src="https://assets.vakilsearch.com/offer+(1).svg" height="16" width="16">
                        </div>
                        <p class="">₹ 50% off</p>
                    </div>
                </div>
                <div class="border-bottom ps-2">
                    <h1 class="fw-bold">₹ 1,499</h1>
                    <p class="fs-5 text-warning-emphasis fw-semibold pb-3">+ Govt. Fee (to be paid later)<i
                            class="fa-solid fa-circle-info ps-1"></i></p>
                </div>
                <div class="d-lg-flex border-bottom pt-2 pb-3">
                    <div class="pt-3 mt-3 ms-3">
                        <img src="https://assets.vakilsearch.com/coinMap.svg" height="32" width="28">
                    </div>
                    <div class="ms-2 mt-2">
                        <h6 class="mb-0 fs-6 fw-bold pb-1">Get ₹1000 cashback*</h6>
                        <h6>Unlock cashback benefits upon opening a current account with our partner banks. <u>T&C</u>
                        </h6>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="fs-6 px-5 py-3 back-green text-white border fw-bold mt-2 rounded-3 box">Get Started
                    </button>
                </div>
                <div class="px-1">
                    <p class="fs-5 fw-bold pt-3">What you'll get</p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Expert assisted process</p>
                    <div class="d-lg-flex">
                        <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                        <p class="fs-6"> Your company name is filed in just <span class="fw-bold">1 - 2 days*</span></p>
                    </div>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> DSC in just <span class="fw-bold"> 3 -
                            4 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> SPICe+ form filing in <span
                            class="fw-bold">7 days*</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Incorporation Certificate in <span
                            class="fw-bold">14 - 21 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Company <span
                            class="fw-bold">PAN+TAN</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> <span class="fw-bold">DIN</span> for
                        directors</p>
                    <div class="d-lg-flex">
                        <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                        <p class="fs-6"> Digital welcome kit that includes a checklist of all post-incorporation
                            compliances</p>
                    </div>
                </div>
            </div>

            <div class="card m-5 p-2 bg-white border-1 shadow-lg">
                <div class="">
                    <h3 class="fw-bold p-2">Pro</h3>
                </div>
                <div class="ps-2">
                    <p>Includes fast application submission and trademark filing in 7 days.</p>
                </div>

                <div class="ps-2 d-lg-flex">
                    <div class="me-4 mt-1">
                        <h6 class="fw-bold text-decoration-line-through">₹ 4,999</h6>
                    </div>
                    <div class="d-lg-flex mb-0">
                        <div class="pe-1">
                            <img src="https://assets.vakilsearch.com/offer+(1).svg" height="16" width="16">
                        </div>
                        <p class="">₹ 30% off</p>
                    </div>
                </div>
                <div class="ps-2">
                    <h1 class="fw-bold">₹ 3,499</h1>
                    <p class="fs-5 text-warning-emphasis fw-semibold">+ Govt. Fee (to be paid later)<i
                            class="fa-solid fa-circle-info ps-1"></i></p>
                </div>
                <div class="d-lg-flex border-bottom ps-2">
                    <div class="me-2">
                        <img src="https://assets.vakilsearch.com/emiOption.svg" height="21" width="47">
                    </div>
                    <div>
                        <p>EMI option available.</p>
                    </div>
                </div>
                <div class="d-lg-flex border-bottom pt-2 pb-3">
                    <div class="pt-3 mt-3 ms-3">
                        <img src="https://assets.vakilsearch.com/coinMap.svg" height="32" width="28">
                    </div>
                    <div class="ms-2 mt-2">
                        <h6 class="mb-0 fs-6 fw-bold pb-1">Get ₹1000 cashback*</h6>
                        <h6>Unlock cashback benefits upon opening a current account with our partner banks. <u>T&C</u>
                            <h6>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="fs-6 px-5 py-3 back-green text-white border fw-bold mt-2 rounded-3 box">Get Started
                    </button>
                </div>
                <div class="px-1">
                    <p class="fs-5 fw-bold pt-3">What you'll get</p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Expert assisted process</p>
                    <div class="d-lg-flex">
                        <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                        <p class="fs-6"> Your company name is filed in just <span class="fw-bold">1 - 2 days*</span></p>
                    </div>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> DSC in just <span class="fw-bold">3 -
                            4 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> SPICe+ form filing in <span
                            class="fw-bold">7 days*</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Incorporation Certificate in <span
                            class="fw-bold">14 - 21 days</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Company <span
                            class="fw-bold">PAN+TAN</span></p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> <span class="fw-bold">DIN</span> for
                        directors</p>
                    <div class="d-lg-flex">
                        <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                        <p class="fs-6"> Digital welcome kit that includes a checklist of all post-incorporation
                            compliances</p>
                    </div>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> MSME registration Free 🎉</p>
                    <p class="fs-6"><i class="fa fa-circle-check text-green"></i> Expedited Trademark application filing
                    </p>
                </div>
            </div>

        </div>
        <p class="text-center pb-5"><b>Note:</b>  Approval is based on MCA review. We’ll do our best to ensure smooth processing. T&C</p>
    </div>

    <div class="container-fliud m-5 shadow-lg border">
        <div class="row p-4">
            <div class="col-lg-4 d-flex align-items-center">
                <img src="https://assets.vakilsearch.com/live-images/zolvit-premium.svg" height="400" width="400">
            </div>
            <div class="col-lg-7 ps-5 ms-5">
                <div class="d-lg-flex">
                    <h2 class="fw-bold pe-2"><span class="text-green">SCALEXCEL</span> Premium</h2>
                    <img src="https://assets.vakilsearch.com/live-images/premium-icon.svg" height="40" width="40">
                </div>
                <p>For new businesses or existing businesses planning to expand. Offers a fast and efficient incorporation process.</p>
                <p class="fw-bold">Features:</p>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                    <p class="fs-6"> Assistance with application preparation for accurate paperwork.</p>
                </div>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                    <p class="fs-6"> Application submission completed within 2 days.</p>
                </div>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-1"></i>
                    <p class="fs-6"> Company incorporation completed in just 5 days, subject to MCA portal availability.</p>
                </div>
                <p class="fw-bold">Note:</p>
                <div class="d-lg-flex">
                    <i class="fa-solid fa-arrows-to-dot text-green pt-1 pe-1"></i>
                    <p class="fs-6"> We will try to retain your existing business name, if applicable.</p>
                </div>
                <div class="d-lg-flex">
                    <i class="fa-solid fa-arrows-to-dot text-green pt-1 pe-1"></i>
                    <p class="fs-6"> Our experts can suggest alternative names if the preferred name is denied.</p>
                </div>
                <div>
                    <button class="fs-6 px-5 py-3 back-green text-white border-0 fw-bold mb-2 rounded-3 box">Talk to Incorporation Expert
                    </button>
                </div>
                <p><b>Pricing:</b> Starting from ₹50,000, depending on business requirements. Includes first-year compliance, such as auditor appointment and annual filing.</p>           
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="fw-bold text-center mb-4 mt-5"><span class="text-green">Overview</span></h1>
        <div>
            <p>Starting a private limited company in India is a preferred option for entrepreneurs aiming to establish professional and recognised businesses. Governed by the Companies Act, 2013, and regulated by the Ministry of Corporate Affairs (MCA), this business structure offers benefits like limited liability, enhanced credibility, and growth opportunities.</p>
            <p>The process involves submitting the SPICe+ form, obtaining Digital Signature Certificates (DSC) for directors, and securing Director Identification Numbers (DIN). Once approved by the Registrar of Companies (RoC), your business receives a Certificate of Incorporation, making it a separate legal entity. This allows the company to own assets, sign contracts, and operate independently.</p>
            <p>After incorporation, compliance is vital for smooth operations. This includes registering for GST, applying for PAN and TAN, and filing annual returns and audits. These requirements not only meet statutory obligations but also build trust with investors and stakeholders.</p>
            <p>A private limited company is the ideal choice for entrepreneurs seeking scalability, structured growth, and funding opportunities. While the process may involve challenges like name approvals or regulatory steps, expert guidance ensures a seamless experience.</p>
            <p>At Vakilsearch, we handle every step of the registration process, from documentation to compliance, so you can focus on growing your business confidently and efficiently.</p>
        </div>

        <h1 class="fw-bold text-center mb-4 mt-5">What Is a <span class="text-green">Private Limited Company?</span></h1>
        <div>
            <p>A private limited company (commonly abbreviated as Pvt Ltd) is considered a separate legal entity from its owners, offering a secure framework for operations while safeguarding the personal assets of its members. This business structure, governed by the Companies Act, 2013, is popular among entrepreneurs and small to medium-sized businesses (SMEs) for its combination of limited liability protection, ownership control, and scalability.</p>
            <p>For instance, startups like Swiggy began as private limited companies due to their ability to secure venture capital funding while maintaining limited liability for founders.</p>
            <p>Unlike public companies, a private limited company restricts the transfer of shares and operates with a focused group of stakeholders. This makes it ideal for businesses seeking operational independence, confidentiality, and long-term growth.</p>
        </div>

        <div class="row p-4">
            <div class="col-lg-4 d-flex align-items-center">
                <img src="https://assets.vakilsearch.com/live-images/pvt-overview-logo.svg" height="300" width="300">
            </div>
            <div class="col-lg-8">
                
                <p>Definition as per the Companies Act, 2013</p>
                <p>Section 2(68) of the Companies Act, 2013, defines a Private Limited Company as an entity that:</p>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-2"></i>
                    <p class="fs-6"><b> Restricts the Transfer of Shares:</b> Shareholders cannot freely transfer their shares to the public or external parties. This restriction ensures that ownership remains within a close group of trusted individuals, protecting the company’s stability.</p>
                </div>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-2"></i>
                    <p class="fs-6"><b> Limits the Number of Members:</b> A private limited company can have a maximum of 200 members, excluding current and former employees who hold shares. This limit ensures the company remains a private entity. (Exception: A One Person Company (OPC) can have only one member.)</p>
                </div>
                <div class="d-lg-flex">
                    <i class="fa fa-circle-check text-green pt-1 pe-2"></i>
                    <p class="fs-6"><b> Prohibits Public Invitations:</b> The company is not allowed to invite the public to subscribe to its shares, debentures, or other securities. This makes private limited companies more focused on raising capital privately, such as through friends, family, or institutional investors.</p>
                </div>               
            </div>
        </div>

        <div class="border-0 p-3 rounded-3 back-green text-white box">
            <h2 class="fw-bold mb-3">Companies Act, 2013</h2>
            <p>The Companies Act 2013 (No. 18 of 2013) is the primary source of Indian company law. It received presidential assent on 29 August 2013 and largely replaced the Companies Act 1956. The Act was implemented in stages. Section 1 came into force on 30 August 2013. 98 sections became effective on 12 September 2013 with some changes. Another 183 sections were enforced from 1 April 2014.</p>
        </div>

        <h2 class="fw-bold mb-4 mt-5">What Are the <span class="text-green">Key Features</span> and Benefits of a Private Limited Company?</h2>
        <p>A Private Limited Company provides an ideal business structure that combines legal protections, operational flexibility, and growth opportunities, making it a preferred choice for entrepreneurs and small to medium-sized businesses. Here are the 10 key features and 7 benefits of a Private Limited Company.</p>
        <div class="row row-cols-lg-4 justify-content-center mt-5">
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-share-from-square fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">1. Limited Liability Protection</h5>
                <p>Shareholders’ liability is limited to the unpaid amount of their shares. This safeguards personal assets from business liabilities.</p>
            </div>
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-gavel fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">2. Separate Legal Entity</h5>
                <p>The company is treated as an independent entity, allowing it to own property, sue, and be sued in its own name.</p>
            </div>
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-building fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">3.  Perpetual Succession</h5>
                <p>The company continues to exist irrespective of changes in ownership or member status, ensuring continuity in business operations.</p>
            </div>

        </div>

        <div class="row row-cols-lg-4 justify-content-center mt-5">
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-users fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">4. Membership Flexibility</h5>
                <p>Requires at least 2 members and allows up to 200 members, making it suitable for small and medium-sized enterprises (SMEs).</p>
            </div>
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-share fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">5. Restrictions on Share Transfers</h5>
                <p>Shares can only be transferred within the group, ensuring control over ownership and decision-making.</p>
            </div>
            <div class="background-lightgreen text-white rounded-3 box me-5 p-3">
            <i class="fa-solid fa-file fs-1"></i>
                <!-- <img src="https://assets.vakilsearch.com/incorporation-outline.svg" height="40" width="40"> -->
                <h5 class="pt-2 pb-2 fw-bold">6. No Minimum Paid-Up Capital</h5>
                <p>Entrepreneurs can register a private limited company in India without any mandatory requirement for minimum capital investment.</p>
            </div>

        </div>
    </div>

    <div class="box15-footer back-green mt-5">
        <div class="container pt-5 pb-4">
            <div class="row row-cols-lg-3">
            <div class="text-white ps-5 pe-5">
                    <h3>CORPORATE AND LEGAL SOLUTIONS</h3>
                    <div class="line"></div>
                    <p class="pt-4">Goods and Service Taxes</p>
                    <p>Company Registration</p>
                    <p>Non-governmental organization (NGO)</p>
                    <p>Intellectual Property (IP)</p>
                    <h4 class="">Address</h4>

                    <div class="pb-3">
                        1st Floor, Emperor Enclave, 8-2-695/E/10, Road No. 12, Banjara Hills, Hyderabad, Telangana
                        500034
                    </div>
                    <h4 class="">Follow Us</h4>
                    <div>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-twitter ps-3"></i>
                        <i class="fa-brands fa-facebook-f ps-3"></i>
                        <i class="fa-brands fa-instagram ps-3"></i>
                        <i class="fa-brands fa-youtube ps-3"></i>
                    </div>
                </div>

                <div class="text-white">
                    <h3>FINANCE AND INVESTMENT CALUCATORS</h1>
                        <div class="line"></div>
                        <div>
                            <p class="pt-4">Gratuity Calculator</p>
                            <p>Pay Commission of India</p>
                            <p>Business Setup Calculator</p>
                            <p>Simple Compound Interest Calculator</p>
                            <p>Home Loan EMI Calculator</p>
                            <p>Mutual Fund Returns Calculator</p>
                            <p>Retirement Planning Calculator</p>
                        </div>

                </div>

                <div class="text-white">
                    <h3>BUSINESS AND LEGAL RESOURCES</h1>
                        <div class="line"></div>
                        <div>
                            <p class="pt-4">Consumer Complaint</p>
                            <p class="pt-2">HSN Code</p>
                            <p class="pt-2">
                                Patent Search</p>
                            <p class="pt-2">
                                Trademark Search</p>
                            <p class="pt-2">Company Name Search</p>

                        </div>

                </div>
            </div>
            <div class="line2 mt-5"></div>
            <div class="copyright">
                <p class="text-white pt-1 text-center">© Copyrights. All rights reserved.</p>
            </div>
        </div>
    </div>




        <!-- MDB -->
    <script type="text/javascript" src="./static/js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <script>
        const links = '<a class="list-group-item list-group-item-action" href="#">Company Registration</a> <a class="list-group-item list-group-item-action" href="./private.php">Private Limited Company</a> <a class="list-group-item list-group-item-action" href="./limited-liability.html">Limited Liability Partnership</a> <a class="list-group-item list-group-item-action" href="./one-person.html">One Person Company</a> <a class="list-group-item list-group-item-action" href="./sole.html">Sole Proprietorship</a> <a class="list-group-item list-group-item-action" href="./nidhi.html">Nidhi Company</a> <a class="list-group-item list-group-item-action" href="./patnership.html">Partnership Firm</a> <a class="list-group-item list-group-item-action" href="./startup.html">Startup India Registration</a>';
        document.getElementById("bussinessSetuplistItems").innerHTML = links;
        function getListItems(event) {
            const id = event.target.id;
            if (id === "companyRegistration") {
                const links = '<a class="list-group-item list-group-item-action" href="#">Company Registration</a> <a class="list-group-item list-group-item-action" href="./private.php">Private Limited Company</a> <a class="list-group-item list-group-item-action" href="./limited-liability.html">Limited Liability Partnership</a> <a class="list-group-item list-group-item-action" href="./one-person.html">One Person Company</a> <a class="list-group-item list-group-item-action" href="./sole.html">Sole Proprietorship</a> <a class="list-group-item list-group-item-action" href="./nidhi.html">Nidhi Company</a> <a class="list-group-item list-group-item-action" href="./patnership.html">Partnership Firm</a> <a class="list-group-item list-group-item-action" href="./startup.html">Startup India Registration</a>';
                document.getElementById("bussinessSetuplistItems").innerHTML = links;
            }

            if (id === "internationalBusinessSetup") {
                const links = '<a class="list-group-item list-group-item-action" href="#">International Business Setup</a> <a class="list-group-item list-group-item-action" href="./us.html">US Incorporation</a> <a class="list-group-item list-group-item-action" href="./dubai.html">Dubai Company Incorporation</a>';
                document.getElementById("bussinessSetuplistItems").innerHTML = links;
            }

            if (id === "licences&Registration") {
                const links = '<a class="list-group-item list-group-item-action" href="#">Licenses & Registrations</a> <a class="list-group-item list-group-item-action" href="./udyam.html">Udyam/MSME Registration</a> <a class="list-group-item list-group-item-action" href="./iso.html">ISO Certification</a> <a class="list-group-item list-group-item-action" href="./fssai.html">FSSAI [Food License]</a> <a class="list-group-item list-group-item-action" href="./iec.html">IEC [Import/Export Code]</a>';
                document.getElementById("bussinessSetuplistItems").innerHTML = links;
            }

            if (id === "webDevelopment") {
                const links = '<a class="list-group-item list-group-item-action" href="#">Web Development</a> <a class="list-group-item list-group-item-action" href="./web.html">Web/E-Commerce Website Development</a>';
                document.getElementById("bussinessSetuplistItems").innerHTML = links;
            }
        }

        var menu = document.querySelector(".mega-menu-business-setup");
        menu.style.display === "static";
        function displayMenuItem(event) {
            var menu = document.querySelector(".mega-menu-business-setup");
            menu.style.display === "static";
        }
    </script>


    <script>
        const taxLinks = '<a class="list-group-item list-group-item-action" href="#">GST and Other Indirect Tax</a> <a class="list-group-item list-group-item-action" href="./gst.html">GST Registration</a> <a class="list-group-item list-group-item-action" href="./gst-filling.html">GST Filing</a> <a class="list-group-item list-group-item-action" href="./gst-revocation.html">GST Cancellation and Revocation</a>';
        document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
        function getListItemsTax(event) {
            const id = event.target.id;
            if (id === "gstandOtherIndirectTax") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">GST and Other Indirect Tax</a> <a class="list-group-item list-group-item-action" href="./gst.html">GST Registration</a> <a class="list-group-item list-group-item-action" href="./gst-filling.html">GST Filing</a> <a class="list-group-item list-group-item-action" href="./gst-revocation.html">GST Cancellation and Revocation</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }

            if (id === "changesinPvtLtdCompany") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">Changes in Pvt Ltd Company</a> <a class="list-group-item list-group-item-action" href="#">Add a Director</a> <a class="list-group-item list-group-item-action" href="#">Remove a Director</a> <a class="list-group-item list-group-item-action" href="#">Increase Authorized Capital</a> <a class="list-group-item list-group-item-action" href="#">Close the Pvt Ltd Company</a> <a class="list-group-item list-group-item-action" href="#">Strike off Company</a> <a class="list-group-item list-group-item-action" href="#">Change Objective/Activity</a> <a class="list-group-item list-group-item-action" href="#">Change Address</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }

            if (id === "changesinLimitedLiabilityPartnership") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">Changes In Limited Liability Partnership</a> <a class="list-group-item list-group-item-action" href="#">Add Designated Partner</a> <a class="list-group-item list-group-item-action" href="#">Changes to LLP Agreement</a> <a class="list-group-item list-group-item-action" href="#">Close the LLP</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }

            if (id === "mandatoryAnnualFilings") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">Mandatory Annual Filings</a> <a class="list-group-item list-group-item-action" href="./annual-compliance.html">Annual Compliance Services</a> <a class="list-group-item list-group-item-action" href="./llp-annual-filling.html">LLP Annual Filings</a> <a class="list-group-item list-group-item-action" href="./secretarial-audit.html">Secretarial Audit</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }

            if (id === "labourCompliance") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">Labour Compliance</a> <a class="list-group-item list-group-item-action" href="./pf-registration.html">Provident Fund (PF) Registration</a> <a class="list-group-item list-group-item-action" href="./esi-registration.html">ESI Registration</a> <a class="list-group-item list-group-item-action" href="./pt-registration.html">Professional Tax Registration</a><a class="list-group-item list-group-item-action" href="./labour.html">Labour Licence</a> <a class="list-group-item list-group-item-action" href="#">GHMC Trade Licence</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }

            if (id === "accounting&Tax") {
                const taxLinks = '<a class="list-group-item list-group-item-action" href="#">Accounting & Tax</a> <a class="list-group-item list-group-item-action" href="#">Accounting and Book-keeping</a> <a class="list-group-item list-group-item-action" href="#">TDS Return Filing</a> <a class="list-group-item list-group-item-action" href="./itr.html">Individual Income Tax Filing</a> <a class="list-group-item list-group-item-action" href="./itr-filling-sole.html">Proprietorship Tax Return Filing</a> <a class="list-group-item list-group-item-action" href="./itr-llp.html">ITR for LLP</a> <a class="list-group-item list-group-item-action" href="#">Corporate Tax</a> <a class="list-group-item list-group-item-action" href="./ita.html">Income Tax Assessment</a> <a class="list-group-item list-group-item-action" href="./itn-response.html">Income Tax Notice</a>';
                document.getElementById("tax&ComplianceListItems").innerHTML = taxLinks;
            }
        }

        var menu = document.querySelector(".mega-menu-tax-compliance");
        menu.style.display === "static";
        function displayMenuItemTax(event) {
            var menu = document.querySelector(".mega-menu-tax-compliance");
            menu.style.display === "static";
        }
    </script>

    <script>
        const trademarkLinks = '<a class="list-group-item list-group-item-action" href="#">Trademark</a> <a class="list-group-item list-group-item-action" href="./trademark.html">Trademark Registration</a>';
        document.getElementById("trademark&IpListItems").innerHTML = trademarkLinks;
        function getListItemsTrademark(event) {
            const id = event.target.id;
            if (id === "tradeMark") {
                const trademarkLinks = '<a class="list-group-item list-group-item-action" href="#">Trademark</a> <a class="list-group-item list-group-item-action" href="./trademark.html">Trademark Registration</a>';
                document.getElementById("trademark&IpListItems").innerHTML = trademarkLinks;
            }

            if (id === "copyRight") {
                const trademarkLinks = '<a class="list-group-item list-group-item-action" href="#">Copyright</a> <a class="list-group-item list-group-item-action" href="#">Copyright Registration</a> <a class="list-group-item list-group-item-action" href="#">Copyright Music</a>';
                document.getElementById("trademark&IpListItems").innerHTML = trademarkLinks;
            }

        }

        var menu = document.querySelector(".mega-menu-trademark-ip");
        menu.style.display === "static";
        function displayMenuItemTrademark(event) {
            var menu = document.querySelector(".mega-menu-trademark-ip");
            menu.style.display === "static";
        }
    </script>

  <script>
        const othersLinks = '<a class="list-group-item list-group-item-action" href="#">NGO Registration</a> <a class="list-group-item list-group-item-action" href="./ngo-registration.html">NGO Registration</a>  <a class="list-group-item list-group-item-action bold" href="#">NGO Compliance</a> <a class="list-group-item list-group-item-action" href="./ngo-compliance.html">NGO Compliance</a>';
        document.getElementById("othersListItems").innerHTML = othersLinks;
        function getListItemsOthers(event) {
            const id = event.target.id;
            if (id === "ngo") {
                const othersLinks = '<a class="list-group-item list-group-item-action" href="#">NGO Registration</a> <a class="list-group-item list-group-item-action" href="./ngo-registration.html">NGO Registration</a>  <a class="list-group-item list-group-item-action bold" href="#">NGO Compliance</a> <a class="list-group-item list-group-item-action" href="./ngo-compliance.html">NGO Compliance</a>';
                document.getElementById("othersListItems").innerHTML = othersLinks;
            }

            if (id === "fullyFledgeMoneyChangesLicence") {
                const othersLinks = '<a class="list-group-item list-group-item-action" href=""> Fully Fledge Money Changes Licence</a> <a class="list-group-item list-group-item-action" href="./ffmc.html"> Fully Fledge Money Changes Licence</a>';
                document.getElementById("othersListItems").innerHTML = othersLinks;
            }

            if (id === "ca/Cs") {
                const othersLinks = '<a class="list-group-item list-group-item-action" href="#">CA/CS</a> <a class="list-group-item list-group-item-action" href="./net-worth.html">Net Worth Certificate for VISA</a> <a class="list-group-item list-group-item-action" href="./property-valuation.html">Property Valuation Certificate</a> <a class="list-group-item list-group-item-action" href="./f&o-tax-audit.html">Future & Options (F&O) Tax Audit</a> <a class="list-group-item list-group-item-action" href="./cma.html">Project Report/(CMA) </a>';
                document.getElementById("othersListItems").innerHTML = othersLinks;
            }

            if (id === "rera") {
                const othersLinks = '<a class="list-group-item list-group-item-action" href="">RERA</a> <a class="list-group-item list-group-item-action" href="./rera.html">RERA</a>';
                document.getElementById("othersListItems").innerHTML = othersLinks;
            }
        }

        var menu = document.querySelector(".mega-menu-others");
        menu.style.display === "static";
        function displayMenuItemOthers(event) {
            var menu = document.querySelector(".mega-menu-others");
            menu.style.display === "static";
        }
    </script>


    
 <script>
    // const resourcesLinks = '<a class="list-group-item list-group-item-action" href="#">Taxation</a> <a class="list-group-item list-group-item-action" href="./ngo-registration.html">NGO</a> <a class="list-group-item list-group-item-action" href="./section-company-registration.html">Section 8 Company</a> <a class="list-group-item list-group-item-action" href="./trust-registration.html">Trust Registration</a> <a class="list-group-item list-group-item-action" href="./online-society.html">Society Registration</a>';
    document.getElementById("resourcesListItems").innerHTML = resourcesLinks;
    function getListItemsResources(event) {
        const id = event.target.id;
        if (id === "taxation") {
            const resourcesLinks = '<a class="list-group-item list-group-item-action" href="#">Taxation</a> <a class="list-group-item list-group-item-action" href="./taxation.html">Taxation</a>';
            document.getElementById("resourcesListItems").innerHTML = resourcesLinks;
        }

        if (id === "accounting") {
            const resourcesLinks = '<a class="list-group-item list-group-item-action" href="#">Accounting</a> <a class="list-group-item list-group-item-action" href="./accounting.html">Accounting</a>';
            document.getElementById("resourcesListItems").innerHTML = resourcesLinks;
        }


        if (id === "businessConsulting") {
            const resourcesLinks = '<a class="list-group-item list-group-item-action" href="#">Business Consulting</a> <a class="list-group-item list-group-item-action" href="./consulting.html">Business Consulting</a>';
            document.getElementById("resourcesListItems").innerHTML = resourcesLinks;
        }

    }

    var menu = document.querySelector(".mega-menu-resources");
    menu.style.display === "static";
    function displayMenuItemResources(event) {
        var menu = document.querySelector(".mega-menu-resources");
        menu.style.display === "static";
    }
</script>

<script>
    // const barsLinks = '<a class="list-group-item list-group-item-action" href="#">Taxation</a> <a class="list-group-item list-group-item-action" href="./ngo-registration.html">NGO</a> <a class="list-group-item list-group-item-action" href="./section-company-registration.html">Section 8 Company</a> <a class="list-group-item list-group-item-action" href="./trust-registration.html">Trust Registration</a> <a class="list-group-item list-group-item-action" href="./online-society.html">Society Registration</a>';
    document.getElementById("barsListItems").innerHTML = barsLinks;
    function getListItemsBars(event) {
        const id = event.target.id;
        if (id === "patnerWithUs") {
            const barsLinks = '<a class="list-group-item list-group-item-action" href="#">Patner With Us</a> <a class="list-group-item list-group-item-action" href="./patnerwithus.html">Patner With Us</a>';
            document.getElementById("barsListItems").innerHTML = barsLinks;
        }

        if (id === "talktoaExpert") {
            const barsLinks = '<a class="list-group-item list-group-item-action" href="#">Talk to a Expert</a> <a class="list-group-item list-group-item-action" href="./talk.html">Talk to a Expert</a>';
            document.getElementById("barsListItems").innerHTML = barsLinks;
        }


    }

    var menu = document.querySelector(".mega-menu-bars");
    menu.style.display === "static";
    function displayMenuItemBars(event) {
        var menu = document.querySelector(".mega-menu-bars");
        menu.style.display === "static";
    }
    </script>
</body>

</html>
