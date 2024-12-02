<?php include "nav/header.php"; ?>


  <!-- Main Content with Carousel -->
  <div class="main-content">
    <div class="container">
      <h1 class="text-center mb-5" style="color: hsl(218, 81%, 95%)">Featured Events</h1>
      
      <!-- MDB Carousel -->
      <div id="eventCarousel" class="carousel slide carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
          
          <!-- First Slide -->
          <div class="carousel-item active">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <!-- Event Card 1 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://m.media-amazon.com/images/S/pv-target-images/e826ebbcc692b4d19059d24125cf23699067ab621c979612fd0ca11ab42a65cb._SX1080_FMjpg_.jpg" class="card-img-top" alt="Event 1">
                  <div class="card-body">
                    <h5 class="card-title">Movie: Inception</h5>
                    <p class="card-text">Experience this mind-bending thriller on the big screen.</p>
                    <p class="text-light">Date: Dec 15, 2024</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>

              <!-- Event Card 2 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bXVzaWMlMjBmZXN0aXZhbHxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Event 2">
                  <div class="card-body">
                    <h5 class="card-title">Concert: Rock Festival</h5>
                    <p class="card-text">Annual rock music festival featuring top bands.</p>
                    <p class="text-light">Date: Dec 20, 2024</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>

              <!-- Event Card 3 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://ew.com/thmb/dq5HePyXK0PBhwEZ_M6I44dlPkc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/ew2rj-2000-c251e796658649a68451e6e8be1ebc9d.jpg" class="card-img-top" alt="Event 3">
                  <div class="card-body">
                    <h5 class="card-title">Theater: Romeo & Juliet</h5>
                    <p class="card-text">Classic Shakespeare play with a modern twist.</p>
                    <p class="text-light">Date: Dec 25, 2024</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Second Slide -->
          <div class="carousel-item">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <!-- Event Card 4 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://static.wixstatic.com/media/a4989e_a031d51000ed4a158bf84e860dc601bc~mv2.png/v1/fill/w_640,h_640,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/a4989e_a031d51000ed4a158bf84e860dc601bc~mv2.png" class="card-img-top" alt="Event 4">
                  <div class="card-body">
                    <h5 class="card-title">Comedy Show: Laugh Night</h5>
                    <p class="card-text">An evening of stand-up comedy with top comedians.</p>
                    <p class="text-light">Date: Jan 5, 2025</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>

              <!-- Event Card 5 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://images.unsplash.com/photo-1525362081669-2b476bb628c3?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Event 5">
                  <div class="card-body">
                    <h5 class="card-title">Art Exhibition: Modern Masters</h5>
                    <p class="card-text">A curated collection of contemporary art.</p>
                    <p class="text-light">Date: Jan 10, 2025</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>

              <!-- Event Card 6 -->
              <div class="col">
                <div class="card h-100">
                  <img src="https://media.npr.org/assets/img/2019/10/11/jazznight_wide-935d952bd5017d8ecf5fdf7734db6f318cd3de9e.jpg" class="card-img-top" alt="Event 6">
                  <div class="card-body">
                    <h5 class="card-title">Music: Jazz Night</h5>
                    <p class="card-text">Smooth jazz performance by renowned musicians.</p>
                    <p class="text-light">Date: Jan 15, 2025</p>
                    <a href="seat_booking.php" class="btn btn-primary">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#eventCarousel" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#eventCarousel" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Existing footer from the original document -->
<?php include "nav/footer.php"; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script>
    // Initialize the carousel with a 5-second interval
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = new mdb.Carousel(document.getElementById('eventCarousel'), {
        interval: 3000,
        ride: true
      });
    });
  </script>
</body>
</html>