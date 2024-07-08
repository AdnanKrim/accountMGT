@extends('adminMaster')
@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <style>
        /* Basic styling for form */
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Grid layout for large devices */
        .form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            align-items: center;
        }

        /* Media queries for responsive design */
        /* For medium devices */
        @media screen and (max-width: 992px) {
            .selector-width {
                margin-bottom: 10px;
                /* Adjust spacing */
            }

            .button-width {
                width: 100%;
                /* Make buttons full width */
            }
        }

        /* For small devices */
        @media screen and (max-width: 576px) {
            .d-flex.flex-column.flex-md-row {
                flex-direction: column;
                /* Stack elements vertically */
            }
        }

        @media screen and (min-width: 992px) {
            .form-row {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                /* Divide into four equal columns */
                gap: 20px;
                align-items: center;
            }

            .form-group {
                flex-direction: row;
                /* Ensure items are in a row */
            }
        }

        /* For medium devices */
        @media screen and (max-width: 992px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        /* For small devices */
        @media screen and (max-width: 576px) {
            .form-group {
                /* width: 100%; */
                grid-template-columns: 1fr;
            }
        }

        /* Styling for form inputs and labels */
        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .formInput {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea.formInput {
            height: 100px;
            /* Adjust height as needed */
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

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            /* Enables smooth scrolling on iOS */
        }
    </style>
    <script src="js/table2excel.js"></script>

    <div style="margin-top: 55px;" class="flex-grow-1 p-3">
        <div class=" bg-light p-3 rounded mb-5 mt-3">
            <!-- search button  -->
            <div>
                <form class="d-flex ms-auto me-3">
                    <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn search-button" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-light p-3 rounded mb-5">
            <!-- button and filter section  -->

            <div class="mb-5 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <!-- selector section  -->
                <div class="selector-width mb-3 mb-md-0">
                    <span>Show </span>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>10</option>
                        <option value="1">20</option>
                        <option value="2">30</option>
                        <option value="3">40</option>
                    </select>
                    <span> Entries </span>
                </div>
                <!-- button section  -->
                <div class="d-flex gap-2">
                    <!-- Export buttons -->
                    <button class="button-width d-flex align-items-center gap-1">
                        <span><img class="button-img" src="./assets/document_16509258.png" alt="" /></span>
                        <span>CSV</span>
                    </button>
                    <button class="button-width d-flex align-items-center gap-1">
                        <span><img class="button-img" src="./assets/document_16509258.png" alt="" /></span>
                        <span>Excel</span>
                    </button>
                    <button class="button-width d-flex align-items-center gap-1">
                        <span><img class="button-img" src="./assets/printer_1041985.png" alt="" /></span>
                        <span>Print</span>
                    </button>
                    <button class="button-width d-flex align-items-center gap-1">
                        <span><img class="button-img" src="./assets/file-storage_8316770.png" alt="" /></span>
                        <span>Visibility</span>
                    </button>
                    <button class="button-width d-flex align-items-center gap-1">
                        <span><img class="button-img" src="./assets/pdf.png" alt="" /></span>
                        <span>PDF</span>
                    </button>
                </div>
            </div>
            <!-- button and filter section  -->

            <!-- input fields  -->
            <form action="/account-store" method="POST">
                @csrf
                <div style="background-color:green;">
                    @if (Session::get('success'))
                        <div style="color:black; margin: 1rem; ">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::get('fail'))
                        <div style="color: rgb(238, 255, 0);">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>

            <div class="container mb-5 ">
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="formInput" id="date" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="formInput" id="description" placeholder="Enter description" required />
                    </div>
                    <div class="form-group">
                        <label for="cashOutDebit">CashOut Debit:</label>
                        <input type="text" class="formInput" id="cashOutDebit" placeholder="Enter amount" required>
                    </div>
                    <div class="form-group">
                        <label for="cashInCredit">CashIn Credit:</label>
                        <input type="text" class="formInput" id="cashInCredit" placeholder="Enter amount" required>
                    </div>
                </div>
                <div class=" btn-div">
                    <button class="btn search-button" type="submit">ADD</button>
                </div>
            </div>
        </form>
            <!-- Table section   -->
            <table class="overflow-auto" id="myTable">
                <thead>
                    <tr>
                        <td>Invoice No.</td>
                        <td>Date</td>
                        <td>Description</td>
                        <td>CashOut Debit</td>
                        <td>CashIn Credit</td>
                        <td>Balance Amount</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- table row 1  -->
                    @foreach ($accounts as $account)
                        <tr>
                            <!-- Dropdown button   -->
                            <td>{{ $account->invoice_no }}</td>
                            <td>{{ $account->date }}</td>
                            <td>{{ $account->description }}</td>
                            <td>{{ $account->cash_out_debit }}</td>
                            <td>{{ $account->cash_in_credit }}</td>
                            <td>{{ $account->calc_amount }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="tableButton dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- table row 2  -->

                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.getElementById('downloadexcel').addEventListener('click', function() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#myTable"));
        });
    </script>
@endsection