<?php

/* 
 * The MIT License
 *
 * CoreUI Copyright 2019 creativeLabs Łukasz Holeczek.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

?>
<div class="col-md-8">
  <div class="card-group">
    <div class="card p-4">
      <div class="card-body">
        <h1>Login</h1>
        <p class="text-muted">Sign In to your account</p>
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text">
              <svg class="c-icon">
                <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
              </svg></span></div>
          <input class="form-control" type="text" placeholder="Username">
        </div>
        <div class="input-group mb-4">
          <div class="input-group-prepend"><span class="input-group-text">
              <svg class="c-icon">
                <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked');?>"></use>
              </svg></span></div>
          <input class="form-control" type="password" placeholder="Password">
        </div>
        <div class="row">
          <div class="col-6">
            <button class="btn btn-primary px-4" type="button">Login</button>
          </div>
          <div class="col-6 text-right">
            <button class="btn btn-link px-0" type="button">Forgot password?</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
      <div class="card-body text-center">
        <div>
          <h2>Sign up</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
        </div>
      </div>
    </div>
  </div>
</div>