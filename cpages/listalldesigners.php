<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="category-filter-row">
                                <div class="right">
                                    <span class="cat-product-count">Total Products: 2083</span>
                                    <div class="filter-product-view">
                                        <a href="category.php" class="btn btn-sm btn-custom" title="Category Grid"><i class="fa fa-th"></i></a>
                                        <a href="category-list.php" class="btn btn-sm btn-gray" title="Category List"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div><!-- end .right -->
                                <div class="left">
                                    <div class="filter-container filter-sort">
                                        <label>Sort by:</label>
                                        <select class="form-control input-sm">
                                            <option value="Date">Date</option>
                                            <option value="Color">Color</option>
                                            <option value="Size">Size</option>
                                            <option value="Price">Price</option>
                                        </select>
                                    </div><!-- End .filter-sort -->
                                    <div class="filter-container filter-show">
                                        <label>Show:</label>
                                        <select class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                    </div><!-- End .filter-show -->
                                </div><!-- End .left -->
                            </div><!-- End .category-filter-row -->

                            
                                    <?
                                $myalldesigners=getAllDesigners();   
								echo $myalldesigners;  
									?>
                               <!-- <label>Showing: 1-4 of 16</label>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>-->
                        </div><!-- End .col-md-9 -->

                      
                    </div><!-- End .row -->
                </div>