<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container py-3 min-vh-100 d-flex flex-column">
    <div class="card shadow rounded-3">
      <div class="container p-3" style="display: flex; align-items: center; gap: 20px; background-color: #ccc;">
        <img src="./logo.webp" alt="logo" style="width: 100px" />
        <div class="fw-bolder fs-2 w-full">E Star Engineering Pvt Ltd</div>
      </div>
      <div class="card-body p-4">
        <form method="post" action="./fetching.php" role="form" class="row">
          <!-- Client Info -->

          <div class="form-group col-lg-12">
            <p class="fw-bolder fs-4 text-muted border-bottom border-muted">
              Client Info
            </p>
          </div>

          <div class="form-group col-lg-6 my-3">
            <input type="text" class="form-control" id="form-group-input" name="Qnumber" autocomplete="off" placeholder="Qutation Number" />
          </div>

          <div class="form-group col-lg-6 my-3">
            <input type="text" class="form-control" id="form-group-input" name="SPname" autocomplete="off" placeholder="Sales Person Name" />
          </div>

          <div class="form-group col-lg-4 my-3">
            <input type="text" class="form-control" id="form-group-input" name="ClientName" autocomplete="off" placeholder="Client Name" />
          </div>

          <div class="form-group col-lg-4 my-3">
            <input type="text" class="form-control" id="form-group-input" name="ClientRole" autocomplete="off" placeholder="Client Role" />
          </div>

          <div class="form-group col-lg-4 my-3">
            <select size="0" class="form-control" name="reason">
              <option>List Of Products</option>
              <option value="Shuttle Stacker Parking">
                Shuttle Stacker Parking
              </option>
              <option value="Tower Parking">Tower Parking</option>
              <option value="2 Post 1+1 Hydraulic System">
                2 Post 1+1 Hydraulic System
              </option>
              <option value="4 Post 1+1 Hydraulic System">
                4 Post 1+1 Hydraulic System
              </option>
              <option value="Puzzle Parking">Puzzle Parking</option>
              <option value="ASRS ">ASRS</option>
              <option value="Multilevel Stacked Rotary Parking">
                Multilevel Stacked Rotary Parking
              </option>
              <option value="Bike Parking">Bike Parking</option>
            </select>
          </div>

          <div class="form-group col-lg-6 my-3">
            <textarea class="form-control" id="form-group-input" name="notes" rows="3" placeholder="Office Address"></textarea>
          </div>

          <div class="form-group col-lg-6 my-3">
            <textarea class="form-control" id="form-group-input" name="notes" rows="3" placeholder="Site Address"></textarea>
          </div>

          <!-- System Dimensions  -->

          <div class="form-group col-lg-12 mt-3">
            <p class="fw-bolder fs-4 text-muted border-bottom border-muted">
              System Dimensions
            </p>
          </div>

          <div class="form-group col-lg-4 my-3">
            <input type="text" class="form-control" id="form-group-input" name="sLenght" autocomplete="off" placeholder="Lenght (mm)" />
          </div>

          <div class="form-group col-lg-4 my-3">
            <input type="text" class="form-control" id="form-group-input" name="sWidth" autocomplete="off" placeholder="Width (mm)" />
          </div>

          <div class="form-group col-lg-4 my-3">
            <input type="text" class="form-control" id="form-group-input" name="sHeight" autocomplete="off" placeholder="Height (mm)" />
          </div>

          <!-- Technical Specifications -->
          <div class="form-group col-lg-12 mt-4">
            <p class="fw-bolder fs-4 text-muted border-bottom border-muted">
              Technical Specifications
            </p>
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="palletLength" autocomplete="off" placeholder="Pallet Length (mm)" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="palletWidth" autocomplete="off" placeholder="Pallet Width (mm)" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="Llch" autocomplete="off" placeholder="Lower Level Clear Height (mm)" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="Ulch" autocomplete="off" placeholder="Upper Level Clear Height (mm)" />
          </div>

          <!-- Lifting -->
          <div class="form-group col-lg-12 mt-4">
            <p class="fw-bolder fs-4 text-muted border-bottom border-muted">
              Lifting
            </p>
          </div>

          <div class="form-group col-lg-6 my-3">
            <input type="text" class="form-control" id="form-group-input" name="liftMechanism" autocomplete="off" placeholder=" Lifting Mechanism" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="hpp" autocomplete="off" placeholder="Hydraulic power pack (kw)" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="uts" autocomplete="off" placeholder="Up time speed" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="dts" autocomplete="off" placeholder="Down time speed" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="Eps" autocomplete="off" placeholder=" Electrical Power Source" />
          </div>

          <!-- Pricing -->
          <div class="form-group col-lg-12 mt-4">
            <p class="fw-bolder fs-4 text-muted border-bottom border-muted">
              Pricing
            </p>
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="price" autocomplete="off" placeholder="List Price" />
          </div>

          <div class="form-group col-lg-3 my-3">
            <input type="text" class="form-control" id="form-group-input" name="noUnit" autocomplete="off" placeholder="No of Unit" />
          </div>

          <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-warning float-end mt-2" for="form-group-input" name="submit">
              Send
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>