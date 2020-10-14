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
  <div class="clearfix">
    <h1 class="float-left display-3 mr-4">404</h1>
    <h4 class="pt-3">Oops! You're lost.</h4>
    <p class="text-muted">The page you are looking for was not found.</p>
  </div>
  <div class="input-prepend input-group">
    <div class="input-group-prepend"><span class="input-group-text">
        <svg class="c-icon">
          <use xlink:href="<?=base_url('assets/vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass');?>"></use>
        </svg></span></div>
    <input class="form-control" id="prependedInput" size="16" type="text" placeholder="What are you looking for?"><span class="input-group-append">
      <button class="btn btn-info" type="button">Search</button></span>
  </div>
</div>