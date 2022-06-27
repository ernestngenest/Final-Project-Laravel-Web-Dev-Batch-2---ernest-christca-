@extends('dashboard.layouts.main')


@section('content')
<div class="app-container">
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="app-icon">

        </div>
      </div>
      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>Menus</span>
          </a>
        </li>
        <li class="sidebar-list-item active">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            <span>Products</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
            <span>Statistics</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
            <span>Inbox</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
            <span>Notifications</span>
          </a>
        </li>
      </ul>
      <div class="account-info">
        <div class="account-info-picture">
          <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
        </div>
        <div class="account-info-name">Monica G.</div>
        <button class="account-info-more">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
        </button>
      </div>
    </div>
    <div class="app-content">
      <div class="app-content-header">
        <h1 class="app-content-headerText">Products</h1>
        <button class="mode-switch" title="Switch Theme">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Add Product</button>
      </div>
      <div class="app-content-actions">
        <form action="{{ route('dashboard') }}" method="GET" class="search">
            @csrf
            <input class="search-bar" name="search" placeholder="Search..." type="text">
        </form>
        <div class="app-content-actions-wrapper">
          <div class="filter-button-wrapper">
            <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
            <div class="filter-menu">
              <label>Category</label>
              <form action="{{ route('dashboard') }}" method="GET">
                @csrf
                    <select name="category_id">
                        <option value = "0" selected>All Categories</option>
                        @foreach ($category as $type)
                            <option value="{{ $type->id }}" {{ $type->id == $selected_id['category_id'] ? 'selected' : '' }}>{{ $type->catergory_name }}</option>
                        @endforeach
                </select>
              <label>Status</label>
              <select name="status">
                <option value = "">All Status</option>
                <option value ="Active" {{ $selected_id['status'] == 'Active' ? 'selected' : '' }}>Active</option>
                <option value ="Disable" {{ $selected_id['status'] == 'Disable' ? 'selected' : '' }}>Disabled</option>
              </select>
              <div class="filter-menu-buttons ">
                <input type="submit" class="filter-button reset" value="Reset">
                </input>
                <input type="submit" class="filter-button apply" value="Apply">
                </input>
            </form>
              </div>
            </div>
          </div>
          <button class="action-button list" title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          </button>
          <button class="action-button grid active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
          </button>
        </div>
      </div>
      <div class="products-area-wrapper specific">
        {{-- product Row --}}
        <div class="products-row text-decoration-none">
            <button class="cell-more-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
            </button>
            <div class="product-cell image">
                <img src="{{ $home_design->home_design_image }}" alt="product">
                <span>{{ $home_design->home_design_name }}</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Home Design</div>
            <div class="product-cell status-cell">
            <span class="cell-label">Status:</span>
            <span class="status {{ $home_design->home_design_status === 'Active' ? ' active' : 'disabled' }}">
                {{ $home_design->home_design_status }}
            </span>
            </div>
            <div class="product-cell sales"><span class="cell-label">Sales:</span>{{ $home_design->home_design_sold }}</div>
            <div class="product-cell stock"><span class="cell-label">Stock:</span>{{ $home_design->home_design_quantity }}</div>
            <div class="product-cell price"><span class="cell-label">Price:</span>Rp. {{ $home_design->home_design_price }}</div>
            <div class="product-cell price mt-5"><span class="cell-label">Description :</span>
            </div>
            <div class="text-light mt-2 description">
                    {{ Str::limit($home_design->home_design_description,200,'...') }}
            </div>
            <div class="text-light text-center descriptions">
                <button type="button" class="border text-light border-none bg-transparent px-3 py-2 rounded-pill descriptions">
                    More
                </button>
            </div>
            <div class="text-light mt-2 more-description display-none">
                {{ $home_design->home_design_description }}
            </div>
        </div>
      </div>
    </div>
  </div>
