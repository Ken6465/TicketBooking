<?php include "nav/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seat Booking - Inception</title>
  <!-- MDBootstrap and FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Background gradient */
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

    /* Seat booking styles */
    .booking-section {
      background-color: hsla(218, 41%, 35%, 0.8);
      backdrop-filter: saturate(200%) blur(15px);
      border-radius: 15px;
      padding: 2rem;
      color: hsl(218, 81%, 95%);
      margin-top: 7rem;
      margin-bottom: 14rem;

    }

    .seat {
      width: 40px;
      height: 40px;
      margin: 5px;
      border-radius: 5px;
      cursor: pointer;
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .seat-available {
      background-color: hsl(218, 81%, 75%);
    }

    .seat-unavailable {
      background-color: hsl(0, 50%, 50%);
      cursor: not-allowed;
    }

    .seat-selected {
      background-color: hsl(120, 50%, 50%);
      transform: scale(1.1);
    }

    .seat-section-label {
      color: hsl(218, 81%, 95%);
      text-align: center;
      margin-bottom: 1rem;
    }

    .screen {
      width: 80%;
      height: 20px;
      background-color: hsl(218, 41%, 50%);
      margin: 0 auto 2rem;
      border-radius: 5px;
      text-align: center;
      color: hsl(218, 81%, 95%);
      line-height: 20px;
    }

    .btn-book {
      background-color: hsl(218, 81%, 75%);
      border-color: hsl(218, 81%, 75%);
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-book:hover {
      background-color: hsl(218, 81%, 65%);
      border-color: hsl(218, 81%, 65%);
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <section class="booking-section container">
    <h2 class="text-center mb-4" style="color: hsl(218, 81%, 95%)">Seat Selection - Inception</h2>
    
    <!-- Screen Indicator -->
    <div class="screen">
      Screen
    </div>

    <!-- Seat Layout Sections -->
    <div class="row mb-4">
      <div class="col-md-4">
        <h4 class="seat-section-label">Section A</h4>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row A -->
          <div class="seat seat-available" data-seat="A1"></div>
          <div class="seat seat-available" data-seat="A2"></div>
          <div class="seat seat-unavailable" data-seat="A3"></div>
          <div class="seat seat-available" data-seat="A4"></div>
          <div class="seat seat-available" data-seat="A5"></div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row A -->
          <div class="seat seat-available" data-seat="A6"></div>
          <div class="seat seat-available" data-seat="A7"></div>
          <div class="seat seat-available" data-seat="A8"></div>
          <div class="seat seat-unavailable" data-seat="A9"></div>
          <div class="seat seat-available" data-seat="A10"></div>
        </div>
      </div>

      <div class="col-md-4">
        <h4 class="seat-section-label">Section B</h4>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row B -->
          <div class="seat seat-available" data-seat="B1"></div>
          <div class="seat seat-available" data-seat="B2"></div>
          <div class="seat seat-available" data-seat="B3"></div>
          <div class="seat seat-unavailable" data-seat="B4"></div>
          <div class="seat seat-available" data-seat="B5"></div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row B -->
          <div class="seat seat-available" data-seat="B6"></div>
          <div class="seat seat-available" data-seat="B7"></div>
          <div class="seat seat-unavailable" data-seat="B8"></div>
          <div class="seat seat-available" data-seat="B9"></div>
          <div class="seat seat-available" data-seat="B10"></div>
        </div>
      </div>

      <div class="col-md-4">
        <h4 class="seat-section-label">Section C</h4>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row C -->
          <div class="seat seat-available" data-seat="C1"></div>
          <div class="seat seat-available" data-seat="C2"></div>
          <div class="seat seat-available" data-seat="C3"></div>
          <div class="seat seat-available" data-seat="C4"></div>
          <div class="seat seat-unavailable" data-seat="C5"></div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
          <!-- Row C -->
          <div class="seat seat-available" data-seat="C6"></div>
          <div class="seat seat-unavailable" data-seat="C7"></div>
          <div class="seat seat-available" data-seat="C8"></div>
          <div class="seat seat-available" data-seat="C9"></div>
          <div class="seat seat-available" data-seat="C10"></div>
        </div>
      </div>
    </div>

    <!-- Seat Legend -->
    <div class="row mt-4">
      <div class="col text-center">
        <div class="d-inline-block me-3">
          <div class="seat seat-available d-inline-block me-2"></div>
          <span class="text-light">Available</span>
        </div>
        <div class="d-inline-block me-3">
          <div class="seat seat-unavailable d-inline-block me-2"></div>
          <span class="text-light">Unavailable</span>
        </div>
      </div>
    </div>

    <!-- Selected Seats and Booking -->
    <div class="row mt-4">
      <div class="col-md-6">
        <h5 class="text-light">Selected Seats: <span id="selected-seats">None</span></h5>
      </div>
      <div class="col-md-6 text-end">
        <a href="payment.php" class="btn btn-book btn-primary">Proceed to Payment</a>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script>
    // Simple seat selection interactivity
    document.querySelectorAll('.seat-available').forEach(seat => {
      seat.addEventListener('click', function() {
        this.classList.toggle('seat-selected');
        updateSelectedSeats();
      });
    });

    function updateSelectedSeats() {
      const selectedSeats = document.querySelectorAll('.seat-selected');
      const selectedSeatsSpan = document.getElementById('selected-seats');
      
      if (selectedSeats.length === 0) {
        selectedSeatsSpan.textContent = 'None';
      } else {
        selectedSeatsSpan.textContent = Array.from(selectedSeats)
          .map(seat => seat.getAttribute('data-seat'))
          .join(', ');
      }
    }
  </script>
</body>
</html>

<?php include "nav/footer.php"; ?>
