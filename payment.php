<?php include "nav/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Inception</title>
  <!-- MDBootstrap and FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Retain the background gradient from seat_booking.php */
    body {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
      min-height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .payment-section {
      background-color: hsla(218, 41%, 35%, 0.8);
      backdrop-filter: saturate(200%) blur(15px);
      border-radius: 15px;
      padding: 2rem;
      color: hsl(218, 81%, 95%);
       margin-top: 7rem;
      margin-bottom: 14rem;
    }

    .form-label {
      color: hsl(218, 81%, 95%);
    }

    .form-control {
      background-color: hsla(218, 41%, 50%, 0.5);
      color: hsl(218, 81%, 95%);
      border-color: hsl(218, 81%, 75%);
    }

    .form-control:focus {
      background-color: hsla(218, 41%, 50%, 0.7);
      color: hsl(218, 81%, 95%);
      border-color: hsl(218, 81%, 90%);
      box-shadow: 0 0 0 0.2rem hsla(218, 81%, 75%, 0.5);
    }

    .btn-payment {
      background-color: hsl(218, 81%, 75%);
      border-color: hsl(218, 81%, 75%);
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-payment:hover {
      background-color: hsl(218, 81%, 65%);
      border-color: hsl(218, 81%, 65%);
      transform: scale(1.05);
    }

    .payment-method-icon {
      width: 50px;
      height: 50px;
      margin: 10px;
      opacity: 0.7;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .payment-method-icon:hover {
      opacity: 1;
      transform: scale(1.1);
    }

    .payment-method-icon.selected {
      opacity: 1;
      border: 3px solid hsl(218, 81%, 75%);
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <section class="payment-section container">
    <h2 class="text-center mb-4" style="color: hsl(218, 81%, 95%)">Payment Details - Inception</h2>
    
    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="bookingId" class="form-label">Booking ID</label>
          <input type="text" class="form-control" id="bookingId" placeholder="Generated Booking ID" readonly>
        </div>
        <div class="col-md-6">
          <label for="amount" class="form-label">Total Amount</label>
          <input type="text" class="form-control" id="amount" value="₱250.00" readonly>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="paymentDate" class="form-label">Payment Date</label>
          <input type="date" class="form-control" id="paymentDate">
        </div>
        <div class="col-md-6">
          <label for="paymentMethod" class="form-label">Payment Method</label>
          <select class="form-control" id="paymentMethod">
            <option value="">Select Payment Method</option>
            <option value="gcash">GCash</option>
            <option value="paymaya">PayMaya</option>
            <option value="paypal">PayPal</option>
            <option value="creditcard">Credit Card</option>
            <option value="bankTransfer">Bank Transfer</option>
          </select>
        </div>
      </div>

<div class="row mb-4 text-center">
  <div class="col">
    <h5 class="mb-3">Select Payment Method</h5>

    <!-- GCash -->
    <i class="fas fa-wallet payment-method-icon" data-method="gcash" title="GCash"></i>

    <!-- PayPal -->
    <i class="fab fa-paypal payment-method-icon" data-method="paypal" title="PayPal"></i>

    <!-- Credit Card -->
    <i class="fas fa-credit-card payment-method-icon" data-method="creditcard" title="Credit Card"></i>

    <!-- Bank Transfer -->
    <i class="fas fa-university payment-method-icon" data-method="bankTransfer" title="Bank Transfer"></i>
  </div>
</div>


      <div class="text-center">
        <button type="submit" class="btn btn-payment btn-primary btn-lg">Confirm Payment</button>
      </div>
    </form>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script>
  document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent the default form submission

  // Create a success message div
  const successMessageDiv = document.createElement('div');
  successMessageDiv.className = 'text-center mt-3 p-3';
  successMessageDiv.style.backgroundColor = 'hsla(120, 50%, 50%, 0.8)'; // Green with opacity
  successMessageDiv.style.color = 'hsl(218, 81%, 95%)'; // Keeping the text color from the theme
  successMessageDiv.style.borderRadius = '10px';
  successMessageDiv.style.backdropFilter = 'blur(10px)';
  successMessageDiv.textContent = 'Payment Successful! Redirecting to homepage...';
  
  // Insert the success message
  const paymentSection = document.querySelector('.payment-section');
  paymentSection.appendChild(successMessageDiv);

  // Redirect after 3 seconds
  setTimeout(() => {
    window.location.href = 'index.php';
  }, 3000);
});
    // Payment method icon selection
    document.querySelectorAll('.payment-method-icon').forEach(icon => {
      icon.addEventListener('click', function() {
        // Remove selected class from all icons
        document.querySelectorAll('.payment-method-icon').forEach(i => {
          i.classList.remove('selected');
        });
        
        // Add selected class to clicked icon
        this.classList.add('selected');
        
        // Update select dropdown
        const method = this.getAttribute('data-method');
        document.getElementById('paymentMethod').value = method;
      });
    });

    // Set payment date to today by default
    document.getElementById('paymentDate').valueAsDate = new Date();

    // Generate a mock booking ID
    function generateBookingId() {
      const prefix = 'INCEP';
      const randomNum = Math.floor(100000 + Math.random() * 900000);
      return `${prefix}${randomNum}`;
    }
    document.getElementById('bookingId').value = generateBookingId();
    
  </script>
</body>
</html>

<?php include "nav/footer.php"; ?>