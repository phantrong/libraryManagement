<div id="content" class="section container slideanim sec-act">
    <h2 class="content-heading">TỦ SÁCH</h2>
    <p class="content-desc">Danh mục hàng hóa phong phú, nhiều sản phẩm độc quyền,
        được chọn lọc kỹ càng đã tạo nên sự khác biệt của Nhà Sách Hoàng Gia Chelsea
        và tạo dựng được lòng tin yêu từ khách hàng</p>
    <div class="content-shelf row">
        <div class="content-shelf-sidebar col-xl-2-4 col-lg-3 col-md-3 col-sm-12">
            <ul class="sidebar-list">
                <form action="{{ route('welcome') }}">
                    <button type="submit"
                        class="sidebar-item {{ (isset($category) && $category == -1) || !isset($category) ? 'active' : '' }}"
                        name='category' value='-1'>Tất cả</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 1 ? 'active' : '' }}" name='category'
                        value='1'>Sách Chính trị – pháp
                        luật</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 2 ? 'active' : '' }}" name='category'
                        value='2'>Sách Khoa học công nghệ – Kinh
                        tế</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 3 ? 'active' : '' }}" name='category'
                        value='3'>Sách Văn học nghệ
                        thuật</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 4 ? 'active' : '' }}" name='category'
                        value='4'>Sách Văn hóa xã hội – Lịch
                        sử</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 5 ? 'active' : '' }}" name='category'
                        value='5'>Sách Giáo trình</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 6 ? 'active' : '' }}" name='category'
                        value='6'>Sách Truyện, tiểu
                        thuyết</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 7 ? 'active' : '' }}" name='category'
                        value='7'>Sách Tâm lý, tâm linh, tôn giáo</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 8 ? 'active' : '' }}" name='category'
                        value='8'>Sách thiếu nhi</button>
                    <button type="submit"
                        class="sidebar-item {{ isset($category) && $category == 0 ? 'active' : '' }}" name='category'
                        value='0'>Khác</button>
                </form>
            </ul>
        </div>
        <div class="content-shelf-main col-xl-9-6 col-lg-9 col-md-9 col-sm-12">
            <div class="book-filter row">
                <div class="book-filter-search col-xl-9-6 col-lg-9 col-md-8 col-sm-9">
                    <form action="{{ route('welcome') }}" class="form-list-book">
                        <input type="hidden" name='category' value="{{ isset($category) ? $category : '' }}">
                        <input type="text" name='name' value="{{ $name }}" class="book-search"
                            placeholder="Tìm kiếm">
                        <button type="submit" class="search-name"><img src="{{ asset('images/search-icon.png') }}">
                        </button>
                    </form>
                </div>
                <div class="filter-sort-wrapper col-xl-2-4 col-lg-3 col-md-4 col-sm-3">
                    <div class="book-filter-sort">
                        @if ($sort == -1)
                            <span class="book-sort-to">Sắp xếp</span>
                        @elseif ($sort == 1)
                            <span class="book-sort-to"> Từ A tới Z </span>
                        @else
                            <span class="book-sort-to"> Từ Z tới A </span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="sort-icon bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <ul class="sort-by">
                            <form action="{{ route('welcome') }}" class="form-list-book">
                                <input type="hidden" name='category' value="{{ isset($category) ? $category : '' }}">
                                <button type="submit" name='sort' value='1' class="sort-by-name AtoZ"
                                    {{ $sort == 1 ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="sort-by-icon bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z" />
                                        <path
                                            d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                    </svg>
                                    <span> Từ A tới Z </span>
                                </button>
                                <button type="submit" name='sort' value='0' class="sort-by-name ZtoA"
                                    {{ $sort == 0 ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="sort-by-icon bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">>
                                        <path
                                            d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z" />
                                        >
                                        <path fill-rule="evenodd"
                                            d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z" />
                                        >
                                        <path
                                            d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                    </svg>
                                    <span> Từ Z tới A</span>
                                </button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            @if (count($books))
                <div class="book-list row">
                    @foreach ($books as $book)
                        <div class="book-wrapper col-xl-2-4 col-lg-3 col-md-4 col-sm-6">
                            <div class="book-item">
                                <a href="{{ route('welcome.singlebook', $book->id) }}" class="book-item-link">
                                    <div class="book-img"
                                        style="background-image: url({{ $book->images()->get()[0]->path }});">
                                    </div>
                                    <h4 class="book-name">{{ $book->name }}</h4>
                                </a>
                                <div class="book-item-author">
                                    <span class="book-author-name">Author: {{ $book->auth }}</span>
                                </div>
                                <div class="book-item-action">
                                    <div class="book-rating">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor"
                                            class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor"
                                            class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor"
                                            class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor"
                                            class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="book-rating-icon bi bi-star-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    </div>
                                    <span class="book-sold">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $books->links() }}
            @else
                <h3 class="note">Không có sách nào phù hợp!</h3>
            @endif
        </div>
    </div>
</div>
