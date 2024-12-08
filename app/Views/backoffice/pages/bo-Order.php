<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Danh sách đơn hàng</h3>
            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Đơn hàng</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Danh sách đơn
                    hàng</a>
            </div>
        </div>
    </div>




    <div class="k-content_body">
        <div class="k-portlet_mobile">
            <div class="box-portlet">
                <div class="box">
                    <ul class="list-box">
                        <li class="item-box" style="background-color: #E1E1EF;">
                            <div>
                                <h4>Chờ thanh toán</h4>
                                <span>Đang chờ thanh toán</span>
                            </div>
                            <div>
                                <h1>0</h1>
                            </div>
                        </li>

                        <li class="item-box" style="background-color: #5867DC;">
                            <div>
                                <h4>Đang chờ xử lí</h4>
                                <span>Đang chờ xử lí trong tháng</span>
                            </div>
                            <div>
                                <h1><?php echo $usersCount ?></h1>
                            </div>
                        </li>

                        <li class="item-box" style="background-color: #1DC9B7;">
                            <div>
                                <h4>Đã hoàn thành</h4>
                                <span>Đã hoàn thành trong tháng</span>
                            </div>
                            <div>
                                <h1>0</h1>
                            </div>
                        </li>

                        <li class="item-box" style="background-color: #FD397A;">
                            <div>
                                <h4>Đã hủy</h4>
                                <span>Đã hủy trong tháng</span>
                            </div>
                            <div>
                                <h1>0</h1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="k-portlet_mobile-head">
                <div class="k-portlet_mobile-head-title">
                    <h3>Danh sách đơn hàng </h3>
                </div>
            </div>

            <div class="search_container">
                <label for="">Search:</label>
                <input type="text" name="" id="searchInput">

            </div>


            <div class="k-portlet_mobile-body">
                <div class="table_user-list">
                    <table class="data_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên KH</th>
                                <th>E-mail</th>
                                <th>SĐT</th>
                                <th>Tổng sản phẩm</th>
                                <th>Trạng thái thanh toán</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody class="search_list">

                            <?php foreach ($orders as $order): ?>
                                <tr class="odd">
                                    <td class="id"><?php echo $order['id'] ?></td>
                                    <td class="code">HK-00<?php echo $order['id'] ?></td>
                                    <td class="name"><?php echo $order['customer_name'] ?></td>
                                    <td class="email"><?php echo $order['email'] ?></td>
                                    <td class="phone_number"><?php echo $order['phone_number'] ?></td>
                                    <td class="total_product"><?php echo $order['total_product'] ?></td>
                                    <td class="status">
                                        <span class="status_badge <?php echo $order['status'] ?>"><?php echo $order['status'] ?></span>
                                    </td>
                                    <td class="created_at"><?php echo $order['created_at'] ?></td>
                                    <td class="updated_at"><?php echo $order['updated_at'] ?></td>
                                    <td class="actions"><i class="fa-solid fa-eye"></i></td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>