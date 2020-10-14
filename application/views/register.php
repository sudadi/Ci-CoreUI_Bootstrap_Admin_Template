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
<div class="col-md-6">
  <div class="card mx-4">
    <div class="card-body p-4">
      <h1>Register</h1>
      <p class="text-muted">Create your account</p>
      <div class="input-group mb-3">
        <div class="input-group-prepend"><span class="input-group-text">
            <svg class="c-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
            </svg></span></div>
        <input class="form-control" type="text" placeholder="Username">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend"><span class="input-group-text">
            <svg class="c-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open');?>"></use>
            </svg></span></div>
        <input class="form-control" type="text" placeholder="Email">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend"><span class="input-group-text">
            <svg class="c-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked');?>"></use>
            </svg></span></div>
        <input class="form-control" type="password" placeholder="Password">
      </div>
      <div class="input-group mb-4">
        <div class="input-group-prepend"><span class="input-group-text">
            <svg class="c-icon">
              <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked');?>"></use>
            </svg></span></div>
        <input class="form-control" type="password" placeholder="Repeat password">
      </div>
      <button class="btn btn-block btn-success" type="button">Create Account</button>
    </div>
    <div class="card-footer p-4">
      <div class="row">
        <div class="col-6">
          <button class="btn btn-block btn-facebook" type="button"><span>facebook</span></button>
        </div>
        <div class="col-6">
          <button class="btn btn-block btn-twitter" type="button"><span>twitter</span></button>
        </div>
      </div>
    </div>
  </div>
</div>