<?php
/**
 * Header Template
 * 
 * @package blockwise
 */

?>

<!DOCTYPE html>
<html lang="<?= language_attributes();?>" class="scroll-smooth">
  <head>
    <meta charset="<?= bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(  ); ?>
    <style>
      .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      .active-tab {
        color: blue;
        background-color: #f3f4f6;
      }
      * {
        transition: background-color 0.2s ease;
      }
      ::-webkit-scrollbar {
        width: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }
      ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
    </style>
  </head>
  <body <?= body_class('bg-gray-50 text-gray-900');?>>
    <header
      class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50"
    >
      <div
        class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between"
      >
        <div class="flex items-center space-x-3">
          <svg
            class="w-10 h-10 text-teal-500"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"
            />
          </svg>
          <h1 class="text-2xl font-bold text-gray-900">steemit</h1>
        </div>
        <div class="flex items-center space-x-3">
          <div class="hidden md:block relative">
            <input
              type="text"
              placeholder="Search"
              class="w-64 pl-10 pr-4 py-2 bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-teal-500"
            />
            <svg
              class="absolute left-3 top-2.5 w-5 h-5 text-gray-400"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </div>
          <button
            id="login-btn"
            class="hidden md:block px-4 py-2 text-sm font-medium text-white bg-gray-900 rounded hover:bg-gray-800"
          >
            Login
          </button>

           <button
            id="logout-btn"
            class="hidden md:block px-4 py-2 text-sm font-medium text-white bg-red-500 rounded hover:bg-red-800"
          >
            Logout
          </button>

          </button>
          <button
            id="hamburger-btn"
            class="p-2 text-gray-600 hover:text-teal-600"
          >
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>
      </div>
    </header>
