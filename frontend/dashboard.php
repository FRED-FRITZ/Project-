<?php include "../frontend/layouts/header.php" ?>

<?php include "../frontend/layouts/sidebar.php" ?>

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="content">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center mb-4">
                                <h4>User</h4>
                            </div>
                            <button class="button-click">Add New</button>
                            <div class="card-body" style="padding-top: 20px;">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>Joshua Serigoygoy</td>
                                                <td>joshuaseri@example.com</td>
                                                <td><button>Edit</button><button>Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>User</td>
                                                <td>Ngofee</td>
                                                <td>Ngofee@example.com</td>
                                                <td><button>Edit</button><button>Delete</button></td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
