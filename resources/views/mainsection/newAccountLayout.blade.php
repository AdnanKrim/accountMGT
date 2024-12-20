@extends('adminMaster')
@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <style>
         .parentBody {
            position: relative;
        }
        .back-button {
            position: absolute;
            top: 70px;
            left: 20px;
            width: 25px;
            height: 25px;
            background-color: rgb(176, 176, 176);
            padding: 5px;
            border-radius: 50%
        }


        .back-button:hover {
            background-color: rgb(75, 74, 74);
        }
        .InputParentDiv {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            align-items: center;
            margin: 80px 10px;
        }

        .account-table-section-1 {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .account-table-section-2 {
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .to-date {
            margin-top: 20px !important;
        }

        .fiter-submit-div {
            margin-top: 20px !important;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Basic styling for form */
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
        }

        /* Grid layout for large devices */
        .form-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            align-items: center;
        }

        .button-width-1 {
            font-size: 13px;
            background: #103b18;
            text-transform: uppercase;
            color: white;
            /* box-shadow: 2px 2px rgba(2, 2, 2, 0.764); */
            /* border-radius: 5px; */
            /* border: none; */
            /* padding: 8px 8px; */
            border: 2px solid darkgreen;
            box-shadow: inset 4px 4px 8px #349646, inset -4px -4px 8px #3c8d4b;
            border-radius: 4px;
        }

        .button-width-2 {
            font-size: 13px;
            background: #704c0d;
            border: 2px solid darkgoldenrod;
            box-shadow: inset 4px 4px 8px #c7b72a, inset -4px -4px 8px #c7b72a;
            border-radius: 4px;
            color: white;
            /* box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
                                                                    border-radius: 5px;
                                                                    border: none; */
            /* padding: 8px 8px; */
            text-transform: uppercase;
        }


        .button-width-3 {
            font-size: 13px;
            text-decoration: none;
            background: #142357;
            color: white;
            /* box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
                                                                    border-radius: 5px;
                                                                    border: none; */
            border: 2px solid rgb(23, 10, 94);
            box-shadow: inset 4px 4px 8px #4f49a0, inset -4px -4px 8px #4f49a0;
            border-radius: 4px;
            /* padding: 8px 8px; */
            text-transform: uppercase;
        }

        .button-width-1:hover,
        .button-width-2:hover,
        .button-width-3:hover {
            box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
        }

        .add-button {
            border-radius: 5px;
            color: white;
            padding: 0px 20px;
            /* background: #213167 !important; */
            background: #213167 !important;
            justify-self: start;
            align-self: center;
            box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
        }

        .add-button:hover {
            /* background: #21a1eb !important; */
            background: #21a1eb !important;
        }

        .submit-button {
            border-radius: 5px;
            color: white;
            padding: 0px 20px;
           /* background: #213167 !important; */
            background: #213167 !important;
            justify-self: start;
            align-self: center;
            box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
        }

        .submit-button:hover {
            /* background: #21a1eb !important; */
            background: #21a1eb !important;
        }

        .tableButton {
            position: !important;
            border-radius: 5px;
            color: white;
            padding: 0px 20px;
            /* background: #213167 !important; */
            background: #213167 !important;
            justify-self: start;
            align-self: center;
            box-shadow: 2px 2px rgba(2, 2, 2, 0.764);
        }

        .tableButton:hover {
         /* background: #21a1eb !important; */
            background: #21a1eb !important;
        }

        /* Styling for form inputs and labels */
        .form-group {
            /* display: flex;
                                                                                  flex-direction: column; */
            display: flex;
            align-items: center;
            width: 100%;
        }

        label {
            text-align: center;
            width: 25%;
            padding: 10px 0px;
            font-weight: 600;
            background-color: #f1f1f1 !important;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
        }

        label1 {
            text-align: center;
            width: 25%;
            padding: 9.5px 0px;
            font-weight: 600;
            background-color: #f1f1f1 !important;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
        }

        .formInput {
            flex-grow: 1;
            width: 75%;
            padding: 10px;
            font-size: 16px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            border-left: none;
        }

        .formInput1 {
            flex-grow: 1;
            width: 75%;
            padding: 10.5px;
            font-size: 16px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            border-left: none;
        }

        textarea.formInput {
            height: 100px;
        }

        .btn-div {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .search-button {
            justify-self: start;
            align-self: center;
        }

        .master-table-responsive {
            padding: 10px;
            margin-top: 50px;
            position: !important;
        }

        .dropdown-menu {
            position: absolute !important;
            z-index: 10 !important;
            /* background-color: #213167; */
            background-color: #213167;
            font-weight: 600;
            text-transform: uppercase;
        }

        /****************************** filter and input  section ***************************** */
        .InputParentDiv {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .submit-button {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(to top, #3bb890, #114070);
            color: white !important;
            border: none;
            padding: 8px;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            font-family: "Montserrat", sans-serif;
            transition: background 0.3s ease;
        }

        .submit-button:hover {
            background: linear-gradient(to bottom, #2a9070, #0d3050);
            opacity: 0.9;
            color: white !important;
        }

        /* Modal css section ------------------------------------------------------------------------>  */
        .modal-content {
            font-family: "Montserrat", sans-serif;
            /* background: #21a1eb !important; */
            background: #21a1eb !important;
            position: relative;
        }

        .modal-title {
            position: absolute;
            top: 0px;
            left: 180px;
            background-color: #213167;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            padding: 10px 20px 10px 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .modal-title-1 {
            position: absolute;
            top: 0px;
            left: 90px;
            /* background-color: #213167; */
            background-color: #213167;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            padding: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .btn-close {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        /* Styling for form inputs and labels */
        .modal-form-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .modal-label {
            text-align: center;
            width: 25%;
            /* margin-top: 8px; */
            padding: 10px 0px;
            font-weight: 600;
            background-color: #f1f1f1 !important;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
        }

        .modal-form-input {
            flex-grow: 1;
            width: 75%;
            padding: 10px;
            font-size: 16px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            border-left: none;
        }

        .modal-footer {
            display: flex;
            justify-content: center;
        }

        .save-button {
            background-color: #213167 !important;
            text-transform: uppercase;
            font-weight: 600;
            padding-right: 0 20px 0 20px;
            border-radius: 10px;
        }

        .save-button:hover {
            color: rgb(176, 171, 171) !important;
        }

        .billing-section-flex-div {
            display: flex;
            justify-content: center;
            margin-top: 5rem;
        }

        .billing-section {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            /* background-color: #213167 !important; */
            background-color: #213167 !important;
            width: 500px;
        }

        .billing-section-p {
            background-color: white;
            display: flex;
            justify-content: space-between;
            padding-right: 10px;
        }

        .billing-section-span {
            padding-left: 10px;
            padding-right: 6px;
            background-color: rgb(203, 199 ,199) !important;
        }

        /* --------------------------- Media Query  section ---------------------- */
        @media screen and (max-width: 576px) {
            .InputParentDiv {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
                align-items: center;
                padding: 10px;
                margin: 95px 10px;
            }

            .d-flex.flex-column.flex-md-row {
                flex-direction: column;
            }

            .account-table-section-2 {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .form-group {
                grid-template-columns: 1fr;
            }

            label {
                font-size: 12px;
                padding: 13px 0px 13px 0px;
            }

            label1 {
                font-size: 12px;
                padding: 3px 0px 4px 0px;
                text-align: center;
                font-weight: 600;
                background-color: #f1f1f1 !important;
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                border-left: 1px solid black;
            }

            .modal-title {
                left: 120px;
            }

            .modal-title-1 {
                left: 80px;
            }

            .modal-label {
                font-size: 12px !important;
                padding: 13px 0px !important;
            }

            .master-table-responsive {
                overflow-x: auto  !important;
                margin: 10px;
            }
        }

        @media screen and (max-width: 992px) {
            .InputParentDiv {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
                align-items: center;
                padding: 10px;
                margin: 95px 10px;
            }

            .account-table-section-1 {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }

            .account-table-section-2 {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }

            label1 {
                font-size: 12px;
                padding: 13px 0px 12px 0px;
                text-align: center;
                font-weight: 600;
                background-color: #f1f1f1 !important;
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                border-left: 1px solid black;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .selector-width {
                margin-bottom: 10px;
            }

            .button-width {
                width: 100%;
            }

            .form-row {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
                align-items: center;
            }

            .form-group {
                flex-direction: row;
            }

            .modal-title {
                left: 180px;
            }

            .modal-title-1 {
                left: 80px;
            }

            .master-table-responsive {
                overflow-x: auto  !important;
                padding: 10px;
            }
        }
    </style>
    <script src="js/table2excel.js"></script>

    <!-- ((((((((((((((((((((((((((((((((( InputParentDiv ))))))))))))))))))))))))))))))))) -->
    <div class="flex-grow-1 p-3 parentBody">
        <div class="InputParentDiv">
            <!-- account-table-section-1 -->
            <form action="/search-master" method="POST" class="account-table-section-1">
                @csrf
                {{-- Date dropdown input field --}}

                <div id="dateField" class="from-to-div" style="margin-top: 20px;">

                    <div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="formInput" name="date" id="dateInput" />
                        </div>
                    </div>


                </div>
                <!-- <<<<<<<<<< month dropdown input field >>>>>>>>>> -->
                <div id="monthField" style="display: none; margin-top: 20px;">
                    <div class="form-group">

                        <label for="date">
                            Month</label>

                        <select class="formInput" aria-label="Default select example" id="monthSelect" name="month">
                            <option value="" selected disabled>Select a month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
                <!-- <<<<<<<<<< invoice dropdown input field >>>>>>>>>> -->
                <div id="invoiceField" style="display: none; margin-top: 20px;">
                    <div class="form-group">
                        <label for="date">
                            Invoice</label>

                        <input class="formInput" type="text" name="invoice_no" id="invoiceInput">

                    </div>
                </div>

                <!-- <<<<<<<<<< client name dropdown input field >>>>>>>>>> -->

                <div id="clientNameField" style="display: none; margin-top: 20px;">
                    <div class="form-group">
                        <label for="date">
                            Client Name</label>
                        <input class="formInput" type="text" name="client_name" id="clientNameInput">
                    </div>
                </div>

                <!-- <<<<<<<<<< LPO input field >>>>>>>>>> -->
                <div id="lpoField" style="display: none; margin-top: 20px;">

                    <div class="form-group">
                        <label for="date">
                            LPO</label>
                        <input class="formInput" type="text" name="lpo" id="lpoInput">
                    </div>
                </div>
                <!-- fiter-submit-div  -->
                <div class="fiter-submit-div">
                    <div class="form-group">
                        <label for="date">Filters:</label>
                        <select id="filterSelect" class="formInput1" aria-label="Default select example">
                            <option value="1" selected>Date</option>
                            <option value="2">Month</option>
                            <option value="3">Invoice</option>
                            <option value="4">Client Name</option>
                            <option value="5">LPO</option>
                        </select>
                    </div>
                    <!-- submit button -->
                    <div class="ms-3">
                        <button type="submit" class="submit-button">Submit</button>
                    </div>
                </div>

            </form>
            <!-- account-table-section-2  -->
            <div class="account-table-section-2">
                <!-- button section  -->
                <div class="d-flex gap-2">
                    <!-- Export buttons -->
                    <button class="button-width-1 d-flex align-items-center gap-1" id="downloadexcel">
                        <span><img class="button-img" src="image/pdf.png" alt="" /></span>
                        <span>Excel</span>
                    </button>
                    <button class="button-width-2 d-flex align-items-center gap-1">
                        <span><img class="button-img" src="image/file-storage_8316770.png" alt="" /></span>
                        <span>Visibility</span>
                    </button>
                    <button type="submit" class="button-width-3 d-flex align-items-center gap-1 btn_print">
                        <span><img class="button-img" src="image/document_16509258.png" alt="" /></span>
                        <span>PDF</span>
                    </button>
                </div>
                <!-- selector section  -->
                <div class="form-group">
                    <label1 for="date">Entries:</label1>
                    <select class="formInput" aria-label="Default select example">
                        <option selected>10</option>
                        <option value="1">20</option>
                        <option value="2">30</option>
                        <option value="3">40</option>
                    </select>
                </div>
            </div>
        </div>

        <hr />
        <!-- ((((((((((((((((((((((((((((((((( InputParentDiv ))))))))))))))))))))))))))))))))) -->

        <div>

            <hr />

            <!-- Table section   -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('fail'))
                <div class="alert alert-danger">
                    {{ session('fail') }}
                </div>
            @endif
            <div class="master-table-responsive" id="container_content">
                <table id="myTable">
                    <thead>
                        <tr>
                            <td>Actions</td>
                            <td style="background-color: #213167 ">Invoice No.</td>
                            <td>Client Name</td>
                            <td>Project Description</td>
                            <td style="background-color: #213167 ">Inv. Date</td>
                            <td>LPO</td>
                            <td>Amount(A&D)</td>
                            <td>Credit</td>
                            <td>Balance Amount <br>(A&C)</td>
                            <td style="background-color: #213167">Remarks</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masters as $master)
                            @php
                                $input = \App\Models\InputMaster::where('invoice_no', $master->invoice_no)->first();
                            @endphp

                            <tr>
                                <!-- Dropdown button   -->
                                <td>
                                    <div class="dropdown">
                                        <button class="tableButton dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="/account-sms/{{ $master->id }} ">SMS</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/master-detail/{{ $input->id }}">Details
                                                </a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop{{ $master->id }}">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>{{ $master->invoice_no }}</td>
                                <td>{{ $master->client_name }}</td>
                                <td>{{ $master->description }}</td>
                                <td>{{ $master->invoice_date }}</td>
                                <td>{{ $master->lpo }}</td>
                                <td>{{ number_format($master->amount, 2, '.', ',') }}</td>
                                <td>{{ number_format($master->credit, 2, '.', ',') }}</td>
                                <td>{{ number_format($master->due, 2, '.', ',') }}</td>
                                <td>{{ number_format($master->remark, 2, '.', ',') }}</td>
                                @include('account.modalMasterDelete')
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            {{-- Billing-section  --}}
            <div class="billing-section-flex-div">
                <div class="billing-section p-3 rounded mb-3 text-center lh-lg">
                    <p class="billing-section-p"><span class="billing-section-span">Total Bill Submitted :</span>
                        <span>{{ number_format($amount, 3, '.', ',') }}</span>
                    </p>
                    <p class="billing-section-p"><span class="billing-section-span">Total Amount Recieved :</span> <span
                            class="text-success">{{ number_format($credit, 3, '.', ',') }}</span> </p>
                    <p class="billing-section-p"><span class="billing-section-span">Total OutStanding:</span> <span
                            class="text-danger">{{ number_format($due, 3, '.', ',') }}</span>
                    </p>
                </div>
            </div>

        </div>
        <img class="back-button" title="back-button" onclick="window.history.back();" src="{{ asset('image/left-arrow.png') }}" alt="">
    </div>

    <script>
        document.getElementById('downloadexcel').addEventListener('click', function() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#myTable"));
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function($) {

            $(document).on('click', '.btn_print', function(event) {
                event.preventDefault();

                //credit : https://ekoopmans.github.io/html2pdf.js

                var element = document.getElementById('container_content');

                //easy
                // html2pdf().from(element).save();

                //custom file name
                // html2pdf().set({
                //     filename: '' + '_Qalat-al-khaleej' + '.pdf'
                // }).from(element).save();


                // more custom settings
                var opt = {
                    margin: 0,
                    filename: 'account_table' + '.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };

                // New Promise-based usage:
                html2pdf().set(opt).from(element).save();


            });



        });
    </script>


    {{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterSelect = document.getElementById("filterSelect");
        const dateField = document.getElementById("dateField");
        const monthField = document.getElementById("monthField");
        const invoiceField = document.getElementById("invoiceField");
        const clientNameField = document.getElementById("clientNameField");
        const lpoField = document.getElementById("lpoField");

        filterSelect.addEventListener("change", function() {
            // Hide all fields initially
            dateField.style.display = "none";
            monthField.style.display = "none";
            invoiceField.style.display = "none";
            clientNameField.style.display = "none";
            lpoField.style.display = "none";

            // Show the selected field
            const selectedValue = filterSelect.value;

            switch (selectedValue) {
                case "1":
                    dateField.style.display = "block";
                    break;
                case "2":
                    monthField.style.display = "block";
                    break;
                case "3":
                    invoiceField.style.display = "block";
                    break;
                case "4":
                    clientNameField.style.display = "block";
                    break;
                case "5":
                    lpoField.style.display = "block";
                    break;
            }
        });
    });
</script> --}}
    <script>
        // dynamic input fields ------------------------------
        document.addEventListener("DOMContentLoaded", function() {
            const filterSelect = document.getElementById("filterSelect");
            const dateField = document.getElementById("dateField");
            const monthField = document.getElementById("monthField");
            const invoiceField = document.getElementById("invoiceField");
            const clientNameField = document.getElementById("clientNameField");
            const lpoField = document.getElementById("lpoField");

            filterSelect.addEventListener("change", function() {
                // Hide all fields initially
                dateField.style.display = "none";
                monthField.style.display = "none";
                invoiceField.style.display = "none";
                clientNameField.style.display = "none";
                lpoField.style.display = "none";

                // Show the selected field
                const selectedValue = filterSelect.value;

                switch (selectedValue) {
                    case "1":
                        dateField.style.display = "block";
                        break;
                    case "2":
                        monthField.style.display = "block";
                        break;
                    case "3":
                        invoiceField.style.display = "block";
                        break;
                    case "4":
                        clientNameField.style.display = "block";
                        break;

                    case "5":
                        lpoField.style.display = "block";
                        break;
                }
            });
        });
    </script>
@endsection
