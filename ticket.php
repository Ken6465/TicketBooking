<?php include "nav/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Booking - My Tickets</title>
  <!-- MDBootstrap and FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
  /* Scoped to .ticket-booking-page to avoid affecting global styles */
  .ticket-booking-page .background-radial-gradient {
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

  .ticket-booking-page .main-content {
    padding: 2rem 0;
  }

  .ticket-booking-page .search-bar {
    margin-bottom: 20px;
    max-width: 600px;
    margin: 20px auto;
    display: flex;
    justify-content: center;
  }

  .ticket-booking-page .ticket-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .ticket-booking-page .ticket-card {
    background-color: hsla(218, 41%, 35%, 0.8);
    padding: 20px;
    border-radius: 12px;
    backdrop-filter: saturate(200%) blur(15px);
    color: hsl(218, 81%, 95%);
    box-shadow: 0 4px 8px hsla(218, 41%, 10%, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .ticket-booking-page .ticket-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px hsla(218, 41%, 10%, 0.5);
  }

  .ticket-booking-page .ticket-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid hsl(218, 81%, 75%);
    padding-bottom: 10px;
    margin-bottom: 15px;
  }

  .ticket-booking-page .ticket-header .ticket-title {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .ticket-booking-page .ticket-header .ticket-id {
    font-size: 1.2rem;
    color: hsl(218, 81%, 75%);
  }

  .ticket-booking-page .ticket-details {
    margin-bottom: 15px;
  }

  .ticket-booking-page .ticket-details .label {
    font-weight: 500;
  }

  .ticket-booking-page .ticket-footer {
    text-align: center;
  }

  /* Validation status styles */
  .ticket-booking-page .status {
    padding: 10px 15px;
    border-radius: 8px;
    font-weight: bold;
    display: inline-block;
    margin-top: 15px;
  }

  .ticket-booking-page .status.valid {
    background-color: hsl(120, 65%, 50%);
    color: white;
  }

  .ticket-booking-page .status.used {
    background-color: hsl(40, 90%, 50%);
    color: white;
  }

  .ticket-booking-page .status.invalid {
    background-color: hsl(0, 70%, 50%);
    color: white;
  }
  </style>
</head>
<body class="background-radial-gradient">
  <div class="ticket-booking-page">
    <section class="main-content">
      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" id="searchInput" class="form-control" placeholder="Search for a movie or event..." onkeyup="searchTickets()">
      </div>
      <!-- Ticket Grid -->
      <div class="ticket-container" id="ticketContainer">
        <!-- Ticket 1 -->
        <div class="ticket-card" data-title="Concert: The Rocking Show">
          <div class="ticket-header">
            <div class="ticket-title">Movie: Inception</div>
            <div class="ticket-id">Ticket INCEP789182</div>
          </div>

          <div class="ticket-details">
            <div><span class="label">Event Date:</span> Dec 15, 2024</div>
            <div><span class="label">Time:</span> 7:00 PM</div>
            <div><span class="label">Venue:</span> Talibon Bohol, TPC</div>
            <div><span class="label">Seat:</span> A12</div>
            <div><span class="label">Price:</span> ₱250.00</div>
            <div><span class="label">Total:</span> ₱250.00</div>
          </div>

          <div class="ticket-footer">
            <div class="status valid">Valid</div>
          </div>
        </div>

        <!-- Ticket 2 -->
        <div class="ticket-card" data-title="Event: The Great Music Fest">
          <div class="ticket-header">
            <div class="ticket-title">Event: The Great Music Fest</div>
            <div class="ticket-id">Ticket #12346</div>
          </div>

          <div class="ticket-details">
            <div><span class="label">Event Date:</span> Jan 10, 2025</div>
            <div><span class="label">Time:</span> 6:00 PM</div>
            <div><span class="label">Venue:</span> Talibon Bohol, TPC</div>
            <div><span class="label">Seat:</span> B8</div>
            <div><span class="label">Price:</span> ₱270.00</div>
            <div><span class="label">Total:</span> ₱270.00</div>
          </div>

          <div class="ticket-footer">
            <div class="status used">Used</div>
          </div>
        </div>

        <!-- Ticket 3 -->
        <div class="ticket-card" data-title="Movie: Space Adventures">
          <div class="ticket-header">
            <div class="ticket-title">Movie: Space Adventures</div>
            <div class="ticket-id">Ticket #12347</div>
          </div>

          <div class="ticket-details">
            <div><span class="label">Event Date:</span> Feb 5, 2025</div>
            <div><span class="label">Time:</span> 9:00 PM</div>
            <div><span class="label">Venue:</span> Talibon Bohol, TPC</div>
            <div><span class="label">Seat:</span> C5</div>
            <div><span class="label">Price:</span> ₱220.00</div>
            <div><span class="label">Total:</span> ₱220.00</div>
          </div>

          <div class="ticket-footer">
            <div class="status invalid">Invalid</div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <script>
    // Function to filter tickets based on search input
    function searchTickets() {
      const searchValue = document.getElementById('searchInput').value.toLowerCase();
      const ticketContainer = document.getElementById('ticketContainer');
      const tickets = ticketContainer.getElementsByClassName('ticket-card');

      for (let i = 0; i < tickets.length; i++) {
        const ticketTitle = tickets[i].getAttribute('data-title').toLowerCase();
        if (ticketTitle.includes(searchValue)) {
          tickets[i].style.display = ''; // Show the ticket if it matches
        } else {
          tickets[i].style.display = 'none'; // Hide the ticket if it doesn't match
        }
      }
    }
  </script>


</body>
</html>

<?php include "nav/footer.php"; ?>
