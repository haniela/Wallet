@extends('layouts.app')

@section('content')

  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="data:image/jpeg;base64,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" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge bg-secondary rounded-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback w-100">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="form-select" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address">
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info">
          <label class="form-check-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">Debit card</label>
          </div>
          <div class="form-check">
            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>

@endsection
