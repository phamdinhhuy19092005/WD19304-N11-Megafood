<div class="k-content">

    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Tổng quan</h3>


        </div>
    </div>


    

    <div class="k-content_body-parameter">
        <div class="row-parameter">

            <div class="col-parameter" >
                <div class="k-portlet-parameter"style="background-color: #FD397A; color: #ffffff;"   >
                    <div class="k-portlet-paramter-head">
                        <div class="head-label">
                            <h3 class="head-label-title">Khách hàng </h3>
                        </div>
                    </div>

                    <div class="k-portlet-body">
                        <div class="k-widget-19">
                            <div class="k-widget-19-title">
                                <div class="k-widget-19-content">
                                <?= $usersCount; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-parameter">
                <div class="k-portlet-parameter" style="background-color: #5867DC; color: #ffffff;">
                    <div class="k-portlet-paramter-head">
                        <div class="head-label">
                            <h3 class="head-label-title">Đơn hàng mới</h3>
                        </div>
                    </div>

                    <div class="k-portlet-body">
                        <div class="k-widget-19">
                            <div class="k-widget-19-title">
                                <div class="k-widget-19-content" >
                                    <?php echo $orderCount ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-parameter">
                <div class="k-portlet-parameter" style="background-color: #FFB822; color: #ffffff;" >
                    <div class="k-portlet-paramter-head">
                        <div class="head-label">
                            <h3 class="head-label-title">Danh mục</h3>
                        </div>
                    </div>

                    <div class="k-portlet-body">
                        <div class="k-widget-19">
                            <div class="k-widget-19-title">
                                <div class="k-widget-19-content">
                                <?= $categoryCount; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-parameter">
                <div class="k-portlet-parameter" style="background-color: #FD397A; color: #ffffff;">
                    <div class="k-portlet-paramter-head">
                        <div class="head-label">
                            <h3 class="head-label-title">Sản phẩm</h3>
                        </div>
                    </div>

                    <div class="k-portlet-body">
                        <div class="k-widget-19">
                            <div class="k-widget-19-title">
                                <div class="k-widget-19-content">
                                    <?= $productCount; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="k-content_body">

        <div class="k-portlet">
            <div class="k-portlet_head">
                <div class="k-portlet_head-label">
                    <h3 class="k-portlet_head-title">Khách hàng nổi bật</h3>
                </div>



                
            </div>
            <div class="search_container">
                <label for="">Search:</label>
                <input type="text"  name="" id="searchInput">
                    
            </div>


            


        </div>

        <div class="k-portlet_body">
            <div class="datatable_wrapper">

                <div class="k-portlet_mobile-body">
                    <div class="table_user-list">
                        <table class="data_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tài khoản</th>
                                    <th>Tên hiển thị</th>
                                    <th>Email</th>
                                    <th>SĐT</th>
                                    <th>Ngày tạo</th>

                                </tr>
                            </thead>
                            <tbody class="search_list">

                                <?php foreach ($users as $user): ?>
                                    <tr class="odd">
                                        <td class="id"><?= $user['id']; ?></td>
                                        <td class="username"><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                                        <td class="name"><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                                        <td class="email"><?= $user['email']; ?></td>
                                        <td class="phone"><?= $user['phone']; ?></td>
                                        <td class="sales"><?= $user['created_at']; ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>