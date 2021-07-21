@inject('BookModel', 'App\Models\Book')

<div id="content" class="content section container">
    <div class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('welcome') }}">Trang chủ</a>
        <a class="breadcrumb-item">{{ $book->category }}</a>
        <a class="breadcrumb-item">{{ $book->name }}</a>
    </div>
    <div class="single-book row">
        <div class="single-book-img col-xl-4 col-lg-4">
            <div class="book-main-img">
                <img src="{{ asset($book->images()->get()[0]->path) }}" alt="">
            </div>
            <div class="book-review-img">
                <img src="{{ asset($book->images()->get()[0]->path) }}" alt="" class="list-img active">
                <img src="{{ asset($book->images()->get()[1]->path) }}" alt="" class="list-img">
            </div>
        </div>
        <div class="book-main col-xl-8 col-lg-8">
            <h2 class="book-heading">{{ $book->name }}</h2>
            <h3 class="book-author">{{ $book->auth }}</h3>
            <div class="book-info">
                <table>
                    <tbody>
                        <tr>
                            <td>Nhà xuất bản</td>
                            <td>{{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td>Năm phát hành</td>
                            <td>{{ $book->year_start }}</td>
                        </tr>
                        <tr>
                            <td>Số lượng sách còn lại</td>
                            <td>{{ $book->quantity }}</td>
                        </tr>
                        <tr>
                            <td>Tên dịch giả</td>
                            <td>{{ $book->translator }}</td>
                        </tr>
                        <tr>
                            <td>Quốc gia</td>
                            <td>{{ $book->country }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="book-num">
                <button class="book-btn-sub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="book-icon-num bi bi-dash-lg" viewBox="0 0 16 16">
                        <path d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
                    </svg>
                </button>
                <input type="text" class="book-num-input" value="1">
                <button class="book-btn-add">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="book-icon-num bi bi-plus-lg" viewBox="0 0 16 16">
                        <path
                            d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                    </svg>
                </button>
            </div>
            <button class="add-cart">Thêm vào giỏ hàng</button>
            <button class="view-cart">Xem giỏ hàng</button>
        </div>
    </div>
    <div class="book-review">
        <h3 class="book-review-heading">Nội dung</h3>
        <div class="book-review-main">
            <p>{{ $book->content()->get()[0]->content_book }}</p>
        </div>
    </div>
    <div class="same-category">
        <h3 class="same-category-heading">Sách cùng thể loại</h3>
        <div class="same-category-list row">
            @if (count($listbook))
                @foreach ($listbook as $book)
                    <div class="book-wrapper col-xl-2 col-lg-2">
                        <div class="book-item">
                            <a href="{{ route('welcome.singlebook', $book->id) }}" class="book-item-link">
                                <div class="book-img"
                                    style="background-image: url({{ asset($book->images()->get()[0]->path) }});">
                                </div>
                                <h4 class="book-name">{{ $book->name }}</h4>
                            </a>
                            <div class="book-item-author">
                                <span class="book-author-name">{{ $book->auth }}</span>
                            </div>
                            <div class="book-item-action">
                                <div class="book-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="book-rating-icon book-rating-icon-gold bi bi-star-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="book-rating-icon bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>
                                <span
                                    class="book-sold">{{ $book->quantity > 0 ? 'SL: ' . $book->quantity : 'Hết hàng' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>Không có sách cùng thể loại.</h3>
            @endif
        </div>
    </div>
</div>
