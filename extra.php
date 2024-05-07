<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Home Control</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        text-align: center;
        margin-top: 50px;
    }

    .row {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }

    .object-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center; 
        flex-direction: column; 
        margin-bottom: 40px; 
        border: 2px solid #ccc; 
        border-radius: 10px; 
        padding: 20px; 
        width: 300px; 
        height: 200px;
        overflow: hidden; /* Ensure the image does not overflow */
    }

    .object-name {
        position: absolute;
        top: 10px;
        left: 10px;
        color: white;
    }

    .object-image {
        width: 100%; /* Take up full width of container */
        height: auto; /* Maintain aspect ratio */
    }

    .switch-container {
        position: relative;
        width: 60px;
        height: 34px;
    }

    .switch {
        position: absolute;
        bottom: 10px;
        right: 10px;
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
        width: 60px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }

    /* Style for modal */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal content */
    .modal-content {
        background-color:  #f0f0f0;
        margin: 20% auto; /* 15% from the top and centered */
        padding: 18px;
        border: 1px solid #888;
        width: 30%; /* Adjusted width */
        text-align: center; /* Center the content */
        border-radius: 25px; /* Rounded corners */
    }

    /* Modal buttons */
    .modal-btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    #confirmYes {
        background-color: #4CAF50; /* Green */
        color: white;
    }

    #confirmNo {
        background-color: #f44336; /* Red */
        color: white;
    }

    .modal-btn:hover {
        background-color: #ddd;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Smart Home Control</h2>
    <div class="row">
        <!-- First Row -->
        <div class="object-container">
            <div class="object-name">Rice Cooker</div>
            <img class="object-image" src="rice cooker.jpg" alt="Rice Cooker">
            <div class="switch-container">
                <label class="switch">
                    <input id="riceCookerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container">
            <div class="object-name">Electric Fan</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Electric Fan">
            <div class="switch-container">
                <label class="switch">
                    <input id="electricFanSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container">
            <div class="object-name">Blender</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Blender">
            <div class="switch-container">
                <label class="switch">
                    <input id="blenderSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Second Row -->
        <div class="object-container">
            <div class="object-name">Kettle</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Kettle">
            <div class="switch-container">
                <label class="switch">
                    <input id="kettleSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container">
            <div class="object-name">Dishwasher</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Dishwasher">
            <div class="switch-container">
                <label class="switch">
                    <input id="dishwasherSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container">
            <div class="object-name">Air Conditioner</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Air Conditioner">
            <div class="switch-container">
                <label class="switch">
                    <input id="airConditionerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Third Row -->
        <div class="object-container">
            <div class="object-name">Vacuum Cleaner</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Vacuum Cleaner">
            <div class="switch-container">
                <label class="switch">
                    <input id="vacuumCleanerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container">
            <div class="object-name">Washing Machine</div>
            <img class="object-image" src="path_to_your_image.jpg" alt="Washing Machine">
            <div class="switch-container">
                <label class="switch">
                    <input id="washingMachineSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Modal for confirmation -->
<div id="confirmModal" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to turn off the appliance?</p>
        <button id="confirmYes" class="modal-btn">Yes</button>
        <button id="confirmNo" class="modal-btn">No</button>
    </div>
</div>

<script>
let currentApplianceId = null;

function showModal() {
    document.getElementById('confirmModal').style.display = 'block';
}

function hideModal() {
    document.getElementById('confirmModal').style.display = 'none';
}

function addApplianceListeners(applianceId) {
    document.getElementById(applianceId).addEventListener('change', function() {
        if (!this.checked) {
            showModal();
            currentApplianceId = applianceId;
        }
    });
}

document.getElementById('confirmYes').addEventListener('click', function() {
    console.log('Appliance successfully turned Off.');
    hideModal();
    document.getElementById(currentApplianceId).checked = false;
});

document.getElementById('confirmNo').addEventListener('click', function() {
    hideModal();
    if (currentApplianceId) {
        document.getElementById(currentApplianceId).checked = true;
    }
});

addApplianceListeners('riceCookerSwitch');
addApplianceListeners('electricFanSwitch');
addApplianceListeners('blenderSwitch');
addApplianceListeners('kettleSwitch');
addApplianceListeners('dishwasherSwitch');
addApplianceListeners('airConditionerSwitch');
addApplianceListeners('vacuumCleanerSwitch');
addApplianceListeners('washingMachineSwitch');

</script>

</body>
</html>
