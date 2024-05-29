<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-=UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<div className="dashboard-container">

<div class="dashboard-container">
    <div class="content">
        <h2 class="dashboard-title">Dashboard</h2>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <div class="image-card">
            <img src="images/cow1.png" alt="Cow Image" onclick="handleImageClick('The pig known for its intelligence and adaptability. Pigs are raised for their high-quality meat, bacon, and various cuts enjoyed worldwide.')" />
            <h2>Cow</h2>
            <p>price</p>
            <p>Image 1 Description</p>
            <button class="add-to-cart" onclick="handleButtonClick(event)">Add to Cart</button>
        </div>

        <!-- remove nalang -->
        <div class="links">
        <button class="add-to-cart" > just press this to go to dashboard <a href="Transaction.php">Go to Transaction</a></button>
        </div>
        <!-- -->

        <!-- Modal -->
        <div id="imageModal" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p id="modalText"></p>
    </div>
</div>

    <script>
        let modal = document.getElementById("imageModal");
         let modalText = document.getElementById("modalText");

         function handleImageClick(description) {
        modalText.textContent = description;
        modal.style.display = "block";
    }

         function closeModal() {
        modal.style.display = "none";
    }

    // Prevent modal from closing when clicking inside the content
         modal.querySelector(".modal-content").addEventListener('click', function(event) {
        event.stopPropagation();
    });

        function handleButtonClick(event) {
        event.stopPropagation();  // Prevent triggering the image click event
        alert("Added to cart!");
    }

    // Close the modal when clicking outside the modal content
         window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

</body>
</html>