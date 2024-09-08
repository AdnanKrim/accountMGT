@extends('adminMaster')
@section('content')
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous"
/>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"
></script>
<!-- font CDN  -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
rel="stylesheet"
/>
    <style>
        .adminSec {
            height: 100vh;
            width: 100%;
            background: rgb(220, 219, 219);
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            margin: 0;
        }

        .section {
            background-color: white;
            padding: 20px;
            /* Increase padding for better spacing */
            border-radius: 6px;
            width: 500px;
            /* Set a fixed width for the section */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .tag-section {
            margin-top: 30px;
            margin-bottom: 30px;
            gap: 10px;
        }

        .formInput {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-div {
            display: flex;
            justify-content: center;
        }

        .addPermissionButton {
            margin-top: 23px;
            width: 90px;
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(to top, #3bb890, #114070);
            color: white !important;
            border: none;
            padding: 5px;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            font-family: "Montserrat", sans-serif;
            transition: background 0.3s ease;
        }

        .addPermissionButton:hover {
            background: linear-gradient(to bottom, #3bb890, #114070);
            opacity: 0.9;
            color: white !important;
        }
    </style>


    <div class="adminSec flex-grow-1 p-3">
        <!-- Tag and button section  -->
        <section class="section">
            <h1>Add Permission</h1>
            <form class="tag-section" action="/permission-store" method="POST" >
                @csrf
                <span class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="formInput" id="name" placeholder="Enter Name" name="name" required />
                </span>
                <span class="button-div">
                    <button type="submit" class="addPermissionButton">Add</button>
                </span>
            </form>
        </section>
    </div>
@endsection