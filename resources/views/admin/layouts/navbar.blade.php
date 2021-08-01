    <aside class="pew1">

        <div class="toolbar">
            <div class="toolbar-namelibrary">

                <img src="https://library-management.com/uploads/satellite.png" />

                <div>
                    <span class="shadows">Lib Mng</span>
                </div>

            </div>

            <div class="toolbar__profile">
                <div class="toolbar__profile-box">
                    <div class="toolbar__profile-box-img">
                        <img src="https://library-management.com/uploads/default.png" />
                    </div>

                    <div class="shadows">
                        <p>Admin</p><br>

                    </div>
                </div>
            </div>

            <div class="toolbar__catagory">
                <ul class="toolbar__catagory-list">
                    <li class="toolbar__catagory-item">
                        <a href="{{ route('admin.data.index') }}" class="toolbar__catagory-link">
                            <!-- <img src="https://img.icons8.com/wired/60/000000/statistics.png"/>          -->
                            <!-- <img src="https://img.icons8.com/officel/60/000000/dashboard.png"/> -->
                            <img src="https://img.icons8.com/color-glass/60/000000/dashboard.png" />
                            <p class="shadows">Dashboard</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item" id="manage__book">
                        <a class="toolbar__catagory-link">
                            <!-- <img src="https://img.icons8.com/wired/80/000000/book.png"/>                                            -->
                            <img src="https://img.icons8.com/fluent/60/000000/book.png" />
                            <p class="shadows">Manage book</p>
                            <img class="toolbar__catagory-link-img2"
                                src="https://img.icons8.com/ios-glyphs/16/000000/chevron-left.png" />
                            <!-- <img class="toolbar__catagory-link-img2" src="https://img.icons8.com/material-sharp/16/000000/chevron-down.png"/> -->
                        </a>
                        <ul class="toolbar__catagory-item-list">
                            <li>

                                <a href="{{ route('admin.book.index') }}">
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">List Book</p>
                                </a>
                            </li>
                            <li>

                                <a href="{{ route('admin.book.create') }}">
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">Add Book</p>
                                </a>
                            </li>
                            <li>

                                <a>
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">Edit Book</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="toolbar__catagory-item">
                        <a href="{{ route('admin.user.index') }}" class="toolbar__catagory-link">
                            <!-- <img src="https://img.icons8.com/dotty/80/000000/user.png"/>                                            -->
                            <img src="https://img.icons8.com/color/60/000000/user.png" />
                            <p class="shadows">Manage user</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item">
                        <a href="{{ route('admin.contact.index') }}" class="toolbar__catagory-link">
                            <!-- <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                            -->
                            <img src="https://img.icons8.com/fluent/48/000000/new-contact.png" />
                            <p class="shadows">Manage contact</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item">
                        <a href="{{ route('admin.order.index') }}" class="toolbar__catagory-link">
                            <!-- <img src="https://img.icons8.com/dotty/80/000000/purchase-order.png"/>                                           -->
                            <img src="https://img.icons8.com/fluent/48/000000/purchase-order.png" />
                            <p class="shadows">Manage order</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </aside>
