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
<div class="card">
  <div class="card-header"> Pagination
    <div class="card-header-actions"><a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-pagination/" target="_blank"><small class="text-muted">docs</small></a></div>
  </div>
  <div class="card-body">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="card">
  <div class="card-header"> Pagination<small>with icons</small></div>
  <div class="card-body">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="card">
  <div class="card-header"> Pagination<small>disabled and active</small></div>
  <div class="card-body">
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2<span class="sr-only">(current)</span></a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <hr>
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled"><span class="page-link">Previous</span></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="card">
  <div class="card-header"> Pagination<small>sizing</small></div>
  <div class="card-body">
    <nav aria-label="...">
      <ul class="pagination pagination-lg">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <hr>
    <nav aria-label="...">
      <ul class="pagination pagination-sm">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="card">
  <div class="card-header"> Pagination<small>alignment</small></div>
  <div class="card-body">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-start">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <hr>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <hr>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>