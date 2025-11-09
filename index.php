<?php
/**
 * Main template file
 * 
 * @package blockwise
 */

get_header();

?>

 <div class="max-w-7xl mx-auto px-4 py-6">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <aside class="hidden md:block md:col-span-2">
          <nav class="bg-white rounded-lg shadow-sm sticky top-20">
            <a
              href="#"
              class="flex items-center space-x-3 px-4 py-3 bg-teal-50 text-teal-700 rounded-t-lg border-b-2 border-teal-500"
            >
              <svg
                class="w-5 h-5"
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
              <span class="font-semibold">Explore</span>
            </a>
            <a
              href="#"
              id="all-posts-link"
              class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 active-tab"
            >
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                />
              </svg>
              <span>All Posts</span>
            </a>
            <a
              href="#"
              id="communities-link"
              class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50"
            >
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                />
              </svg>
              <span>Communities</span>
            </a>
            <a
              href="#"
              class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50"
            >
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
              </svg>
              <span>My Profile</span>
            </a>
          </nav>
        </aside>

        <main class="md:col-span-7" id="main-content">
          <div class="md:hidden mb-4">
            <div class="relative">
              <button
                id="mobile-nav-btn"
                class="w-full flex items-center justify-between px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50"
              >
                <span id="mobile-nav-label">All posts</span>
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                  />
                </svg>
              </button>
              <div
                id="mobile-nav-menu"
                class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-20 max-h-96 overflow-y-auto"
              >
                <a
                  href="#"
                  data-nav="all-posts"
                  class="block px-4 py-3 bg-gray-100 text-gray-900 font-semibold border-b border-gray-200"
                  >All posts</a
                >
                <a
                  href="#"
                  data-nav="communities"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-50 font-medium"
                  >Communities</a
                >
                <a
                  href="#"
                  data-nav="profile"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-50"
                  >My Profile</a
                >
                <a
                  href="#"
                  data-nav="wallet"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-b-lg"
                  >My Wallet</a
                >
              </div>
            </div>
          </div>
        </main>

        <aside class="hidden lg:block lg:col-span-3">
          <div class="space-y-6 sticky top-20">
            <div id="default-sidebar-content">
              <div class="bg-white rounded-lg shadow-sm p-4">
                <h3 class="font-semibold text-gray-900 mb-3">
                  New to Steemit?
                </h3>
                <a
                  href="#"
                  class="block text-sm text-gray-600 hover:text-teal-600 mb-2"
                  >Welcome Guide</a
                >
                <a
                  href="#"
                  class="block text-sm text-teal-600 hover:text-teal-700 font-medium"
                  >FAQ</a
                >
              </div>
              <div class="bg-white rounded-lg shadow-sm p-4 mt-6">
                <h3 class="font-semibold text-gray-900 mb-3">
                  Coin Marketplace
                </h3>
                <div class="space-y-3">
                  <div class="flex items-center justify-between">
                    <div>
                      <span class="text-sm font-semibold text-gray-900"
                        >STEEM</span
                      ><span class="text-xs text-teal-600 ml-1">0.12</span>
                    </div>
                    <span class="text-xs text-green-600">↑ 1.234%</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <div>
                      <span class="text-sm font-semibold text-gray-900"
                        >TRX</span
                      ><span class="text-xs text-teal-600 ml-1">0.34</span>
                    </div>
                    <span class="text-xs text-red-600">↓ 1.23%</span>
                  </div>
                </div>
              </div>
            </div>
            <div id="community-sidebar-content" class="hidden space-y-6"></div>
          </div>
        </aside>
      </div>
    </div>

    <button
      id="back-to-top"
      class="hidden md:block fixed bottom-6 right-6 bg-teal-500 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-teal-600 z-50"
    >
      <svg
        class="w-5 h-5"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M5 10l7-7m0 0l7 7m-7-7v18"
        />
      </svg>
    </button>

    <div
      id="login-modal"
      class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4"
    >
      <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold">Login</h2>
          <button id="close-login" class="text-gray-500 hover:text-gray-700">
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
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
        <form class="space-y-4">
          <div class="relative">
            <span class="absolute left-3 top-2.5 text-gray-400">@</span>
            <input
              type="text"
              placeholder="Enter your username"
              class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-teal-500"
            />
          </div>
          <input
            type="password"
            placeholder="Password or WIF"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-teal-500"
          />
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="rounded" />
            <span class="text-sm text-gray-600">Keep me logged in</span>
          </label>
          <button
            type="submit"
            class="w-full py-2 bg-teal-500 text-white rounded hover:bg-teal-600"
          >
            Login
          </button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
          Not a Steemit?
          <a href="#" class="text-teal-600 hover:underline">Free to register</a>
        </p>
      </div>
    </div>

    <div
      id="side-menu"
      class="fixed right-0 top-0 h-full w-80 bg-gray-900 text-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 overflow-y-auto"
    >
      <div class="p-4">
        <button
          id="close-menu"
          class="absolute top-4 right-4 text-white hover:text-gray-300"
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
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
        <nav class="space-y-2">
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Welcome</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >New to Steemit?</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded">FAQ</a>
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Switch to Night Mode</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Coin Marketplace</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Stolen Accounts Recovery</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Change Account Password</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Vote for Witnesses</a
          >
          <a href="#" class="block py-2 px-3 hover:bg-gray-800 rounded"
            >Steem Proposals</a
          >
        </nav>
      </div>
    </div>

    <div
      id="menu-overlay"
      class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"
    ></div>

    <script>
      const postsData = [
        {
          id: 1,
          author: "steemitblog",
          reputation: 77,
          category: "steem",
          time: "2 days ago",
          title:
            "Steemit Update [October 5th, 2025] : Steemit Challenge Season 27 - Week 2",
          excerpt:
            "This week we move onto Week 2 of Season 27 of the Steemit Challenge...",
          payout: "$5.87",
          votes: 148,
          comments: 1,
          avatar: "S",
        },
        {
          id: 2,
          author: "steemitblog",
          reputation: 77,
          category: "steem",
          time: "8 days ago",
          title:
            "Steemit Update [September 29th, 2025] : Community Curators for October",
          excerpt: "Thank you to all 16 teams who took the time to apply...",
          payout: "$2.84",
          votes: 159,
          comments: 52,
          avatar: "S",
        },
        {
          id: 3,
          author: "disconnect",
          reputation: 80,
          category: "contestalerts",
          time: "3 days ago",
          title: "Contest Alerts: Active Contest List on 04th October 2025",
          excerpt: "This is the 1576th Active Contest List...",
          payout: "$3.53",
          votes: 36,
          comments: 1,
          avatar: "D",
        },
        {
          id: 4,
          author: "trafalgar",
          reputation: 88,
          category: "STEEM CN/中文",
          time: "9 hours ago",
          title: "送给女性的最佳浪漫礼物",
          excerpt: "送给女性的最佳浪漫礼物创意...",
          payout: "$169.72",
          votes: 135,
          comments: 2,
          avatar: "T",
        },
      ];

      const communitiesData = [
        {
          id: 1,
          name: "আমার বাংলা রুপ",
          description: "শুধুমাত্র বাংলায় মিডিয়া রুপিং কৰেন তাদের জন্য এই রুপ",
          subscribers: 8912,
          posters: 111,
          posts: 1747,
          pendingRewards: "$9,941",
          avatar: "আ",
          admins: ["shuvo35", "rme", "7 others"],
          language: "Bengali • Only Bengali language posts will be made",
          rules: [
            "শুধুমাত্র বাংলা ভাষায় পোস্ট করুন",
            "প্রতিদিন শুধুমাত্র একটি পোস্ট করবেন",
            "অন্য কারো কন্টেন্ট চুরি করবেন না",
            "স্প্যাম করবেন না",
          ],
        },
        {
          id: 2,
          name: "Korea • 한국 • KR • KO",
          description: "스팀잇 Newbie들과 OB들의 만남",
          subscribers: 12850,
          posters: 113,
          posts: 1315,
          pendingRewards: "$7,234",
          avatar: "K",
          admins: ["jayplayco", "ukk", "2 others"],
          language: "Korean",
          rules: ["한국어로만 게시하세요", "스팸 금지", "존중하는 태도 유지"],
        },
        {
          id: 3,
          name: "Steem Alliance",
          description: "United Steemit Community",
          subscribers: 3872,
          posters: 44,
          posts: 98,
          pendingRewards: "$1,456",
          avatar: "SA",
          admins: ["rme", "blacks", "nusuranur"],
          language: "English",
          rules: [
            "Be respectful to all members",
            "No spam or plagiarism",
            "Follow community guidelines",
          ],
        },
        {
          id: 4,
          name: "STEEM CN/中文",
          description: "STEEM中文",
          subscribers: 8216,
          posters: 22,
          posts: 102,
          pendingRewards: "$3,891",
          avatar: "中",
          admins: ["wherein", "htliao", "3 others"],
          language: "Chinese",
          rules: ["仅限中文帖子", "禁止垃圾邮件", "尊重社区成员"],
        },
      ];

      const communityPostsData = {
        1: [
          {
            id: 101,
            author: "amarbanglablog",
            reputation: 87,
            category: "আমার বাংলা রুপ",
            time: "2 hours ago",
            title:
              "লাড়জুকু খাঁকেরা প্রতাহ কিউরেশন রিপোর্ট (Shy Fox Daily Curation Report - 07/10/2025)",
            excerpt:
              "লাড়জুকু খাঁকের প্রতাহ কিউরেশন রিপোর্ট (Curation Report) 07/10/2025",
            payout: "$53.97",
            votes: 48,
            comments: 0,
            avatar: "A",
            badge: "Primary Curator",
            isPinned: true,
          },
          {
            id: 102,
            author: "rme",
            reputation: 91,
            category: "আমার বাংলা রুপ",
            time: "5 hours ago",
            title:
              "আমার বাংলা ব্লগের FUN MEME টোকেন $PUSS এর কিছু logo, meme এবং banner - Part 228",
            excerpt: "আজকের বাংলা ব্লগের প্রতাহ মেমে এবং লোগো সিরিজ...",
            payout: "$2,746.34",
            votes: 297,
            comments: 8,
            avatar: "R",
            badge: "Founder",
          },
          {
            id: 103,
            author: "aek-baran",
            reputation: 73,
            category: "আমার বাংলা রুপ",
            time: "7 hours ago",
            title: "প্রতিদিন অন পরীক্ষা: ১৭ ডিসেম্বর ২০২৫",
            excerpt: "আজকের দৈনিক অন পরীক্ষা...",
            payout: "$5.48",
            votes: 112,
            comments: 6,
            avatar: "A",
          },
        ],
        2: [
          {
            id: 201,
            author: "jayplayco",
            reputation: 82,
            category: "Korea • 한국 • KR • KO",
            time: "4 hours ago",
            title: "한국 스팀잇 주간 리포트 - 2025년 10월",
            excerpt: "이번 주 한국 커뮤니티 활동 요약...",
            payout: "$145.23",
            votes: 89,
            comments: 12,
            avatar: "J",
          },
        ],
        3: [
          {
            id: 301,
            author: "blacks",
            reputation: 85,
            category: "Steem Alliance",
            time: "1 day ago",
            title: "Weekly Community Update - Steem Alliance",
            excerpt: "Here's what happened this week...",
            payout: "$78.92",
            votes: 56,
            comments: 8,
            avatar: "B",
          },
        ],
        4: [
          {
            id: 401,
            author: "wherein",
            reputation: 79,
            category: "STEEM CN/中文",
            time: "6 hours ago",
            title: "每日中文社区精选 - 十月八日",
            excerpt: "今日推荐的优质中文内容...",
            payout: "$92.45",
            votes: 71,
            comments: 5,
            avatar: "W",
          },
        ],
      };

      const leadershipLogs = {
        1: [
          {
            user: "shuvo35",
            role: "ADMIN",
            activity: "Pinned post by @amarbanglablog",
            time: "2 hours ago",
          },
          {
            user: "rme",
            role: "ADMIN",
            activity: "Updated community rules",
            time: "1 day ago",
          },
          {
            user: "stea90",
            role: "MOD",
            activity: "Reviewed 15 posts",
            time: "2 days ago",
          },
        ],
        2: [
          {
            user: "jayplayco",
            role: "ADMIN",
            activity: "Created weekly report",
            time: "4 hours ago",
          },
          {
            user: "ukk",
            role: "MOD",
            activity: "Moderated comments",
            time: "1 day ago",
          },
        ],
        3: [
          {
            user: "rme",
            role: "ADMIN",
            activity: "Posted community update",
            time: "1 day ago",
          },
          {
            user: "blacks",
            role: "ADMIN",
            activity: "Curated 10 posts",
            time: "2 days ago",
          },
        ],
        4: [
          {
            user: "wherein",
            role: "ADMIN",
            activity: "Published daily digest",
            time: "6 hours ago",
          },
        ],
      };

      let currentView = "posts",
        currentCommunity = null;
      const mainContent = document.getElementById("main-content"),
        allPostsLink = document.getElementById("all-posts-link"),
        communitiesLink = document.getElementById("communities-link"),
        loginBtn = document.getElementById("login-btn"),
        loginModal = document.getElementById("login-modal"),
        closeLogin = document.getElementById("close-login"),
        hamburgerBtn = document.getElementById("hamburger-btn"),
        sideMenu = document.getElementById("side-menu"),
        closeMenu = document.getElementById("close-menu"),
        menuOverlay = document.getElementById("menu-overlay"),
        backToTop = document.getElementById("back-to-top"),
        mobileNavBtn = document.getElementById("mobile-nav-btn"),
        mobileNavMenu = document.getElementById("mobile-nav-menu"),
        mobileNavLabel = document.getElementById("mobile-nav-label"),
        defaultSidebarContent = document.getElementById(
          "default-sidebar-content"
        ),
        communitySidebarContent = document.getElementById(
          "community-sidebar-content"
        );

      function updateSidebar(show = false, community = null, logs = []) {
        if (show && community) {
          defaultSidebarContent.classList.add("hidden");
          communitySidebarContent.classList.remove("hidden");
          communitySidebarContent.innerHTML = `
          <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-900 mb-3">Leadership</h3>
            <div class="space-y-3">
              ${logs
                .map(
                  (l) =>
                    `<div class="text-sm"><div class="flex items-center space-x-2 mb-1"><span class="font-medium text-teal-600">@${l.user}</span><span class="px-2 py-0.5 bg-gray-200 text-gray-700 rounded text-xs font-semibold">${l.role}</span></div><p class="text-gray-600 text-xs">${l.activity}</p><p class="text-gray-400 text-xs mt-1">${l.time}</p></div>`
                )
                .join("")}
            </div>
          </div>
          <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-900 mb-3">Description</h3>
            <p class="text-sm text-gray-600 mb-3">${community.description}</p>
            <div class="text-xs text-gray-500 mb-4"><strong>Admins:</strong> ${community.admins.join(
              ", "
            )}</div>
            <h3 class="font-semibold text-gray-900 mb-3 mt-4 pt-4 border-t border-gray-200">Rules</h3>
            <ol class="space-y-2 text-sm text-gray-600 mb-4">
              ${community.rules
                .map(
                  (r, i) =>
                    `<li class="flex space-x-2"><span class="font-semibold">${
                      i + 1
                    }.</span><span>${r}</span></li>`
                )
                .join("")}
            </ol>
            <h3 class="font-semibold text-gray-900 mb-2 mt-4 pt-4 border-t border-gray-200">Language</h3>
            <p class="text-sm text-gray-600">${community.language}</p>
          </div>
          <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-900 mb-3">Coin Marketplace</h3>
            <div class="space-y-3">
              <div class="flex items-center justify-between"><div><span class="text-sm font-semibold text-gray-900">STEEM</span><span class="text-xs text-teal-600 ml-1">0.12</span></div><span class="text-xs text-green-600">↑ 1.234%</span></div>
              <div class="flex items-center justify-between"><div><span class="text-sm font-semibold text-gray-900">TRX</span><span class="text-xs text-teal-600 ml-1">0.34</span></div><span class="text-xs text-red-600">↓ 1.23%</span></div>
            </div>
          </div>
        `;
        } else {
          defaultSidebarContent.classList.remove("hidden");
          communitySidebarContent.classList.add("hidden");
        }
      }

      function renderPosts() {
        mainContent.innerHTML = `<div class="flex justify-between items-center mb-6"><span class="text-lg font-semibold">All posts</span><div class="relative"><button id="dropdown-btn" class="flex items-center justify-between w-48 space-x-2 px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50"><span>Trending</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button><div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-10"><a href="#" class="block px-4 py-2 bg-gray-100 text-gray-900 font-semibold rounded-t-lg">Trending</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Hot</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">New</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Payouts</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-b-lg">Muted</a></div></div></div><div class="space-y-4">${postsData
          .map(
            (p) =>
              `<article class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all cursor-pointer border border-transparent hover:border-teal-500" data-post-id="${p.id}"><div class="flex space-x-3"><div class="flex-shrink-0"><div class="w-12 h-12 rounded-full bg-teal-500 text-white flex items-center justify-center font-bold">${p.avatar}</div></div><div class="flex-1 min-w-0"><div class="flex items-center space-x-2 text-xs text-gray-500 mb-1"><span>@${p.author} (${p.reputation}) in #${p.category}</span><span>•</span><span>${p.time}</span></div><h2 class="font-semibold text-gray-900 mb-1 hover:text-teal-600">${p.title}</h2><p class="text-gray-600 text-sm mb-2 line-clamp-2">${p.excerpt}</p><div class="flex items-center space-x-4 text-sm text-gray-500"><span class="text-pink-500 font-medium">↑↓ ${p.payout}</span><span>${p.votes}</span><span class="flex items-center space-x-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg><span>${p.comments}</span></span></div></div></div></article>`
          )
          .join("")}</div>`;
        updateSidebar(false);
        const db = document.getElementById("dropdown-btn"),
          dm = document.getElementById("dropdown-menu");
        if (db)
          db.addEventListener("click", () => dm.classList.toggle("hidden"));
        document.querySelectorAll("[data-post-id]").forEach((a) =>
          a.addEventListener("click", function () {
            renderPostDetail(this.dataset.postId);
          })
        );
      }

      function renderPostDetail(id) {
        const p = postsData.find((x) => x.id == id);
        if (!p) return;
        mainContent.innerHTML = `<button id="back-btn" class="flex items-center space-x-2 text-teal-600 hover:text-teal-700 mb-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg><span>Back to posts</span></button><article class="bg-white rounded-lg p-6 shadow-sm"><div class="flex items-center space-x-3 mb-4"><div class="w-12 h-12 rounded-full bg-teal-500 text-white flex items-center justify-center font-bold">${p.avatar}</div><div><div class="font-semibold text-gray-900">@${p.author} (${p.reputation})</div><div class="text-sm text-gray-500">in #${p.category} • ${p.time}</div></div></div><h1 class="text-3xl font-bold text-gray-900 mb-4">${p.title}</h1><div class="prose max-w-none mb-6"><p class="text-gray-700 leading-relaxed">${p.excerpt}</p><p class="text-gray-700 leading-relaxed mt-4">This is a detailed view of the blog post. In a real implementation, this would contain the full content of the post with images, formatting, and other media.</p></div><div class="flex items-center space-x-6 text-sm text-gray-600 border-t border-gray-200 pt-4"><span class="text-pink-500 font-medium text-lg">↑↓ ${p.payout}</span><span>${p.votes} votes</span><span>${p.comments} comments</span></div></article><div class="bg-white rounded-lg p-6 shadow-sm mt-4"><h3 class="font-semibold text-gray-900 mb-4">${p.comments} Comments</h3><p class="text-gray-500 text-sm">Comments would appear here...</p></div>`;
        updateSidebar(false);
        document
          .getElementById("back-btn")
          .addEventListener("click", renderPosts);
      }

      function renderCommunities() {
        mainContent.innerHTML = `<div class="bg-white rounded-lg py-4 px-4 md:py-6 md:px-12 shadow-sm"><h1 class="text-lg font-semibold mb-2">Communities</h1><div class="flex justify-between items-center mb-6"><div class="relative"><input type="text" placeholder="Search communities..." class="w-[140%] pl-10 pr-4 py-2 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"><svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div><div class="relative"><button id="dropdown-btn" class="flex justify-between items-center space-x-2 px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 w-40"><span>Rank</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button><div id="dropdown-menu" class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-10"><a href="#" class="block px-4 py-2 bg-gray-100 text-gray-900 font-semibold rounded-t-lg">Rank</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Subscribers</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-b-lg">New</a></div></div></div><div class="space-y-4">${communitiesData
          .map(
            (c) =>
              `<article class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-teal-500 cursor-pointer" data-community-id="${c.id}"><div class="flex space-x-3 items-center"><div class="flex-1 min-w-0"><h2 class="font-semibold text-gray-900 mb-1 hover:text-teal-600">${c.name}</h2><p class="text-gray-600 text-sm mb-2 line-clamp-2">${c.description}</p><div class="flex items-center space-x-4 text-xs text-gray-500 mb-3"><span>${c.subscribers} subscribers</span><span>•</span><span>${c.posters} posters</span><span>•</span><span>${c.posts} Posts</span></div></div><div><button class="px-4 py-1.5 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition-colors" onclick="event.stopPropagation();">SUBSCRIBE</button></div></div></article>`
          )
          .join("")}</div></div>`;
        updateSidebar(false);
        const db = document.getElementById("dropdown-btn"),
          dm = document.getElementById("dropdown-menu");
        if (db)
          db.addEventListener("click", () => dm.classList.toggle("hidden"));
        document.querySelectorAll("[data-community-id]").forEach((a) =>
          a.addEventListener("click", function () {
            renderCommunityDetail(parseInt(this.dataset.communityId));
          })
        );
      }

      function renderCommunityDetail(id) {
        const c = communitiesData.find((x) => x.id === id);
        if (!c) return;
        currentCommunity = id;
        const posts = communityPostsData[id] || [],
          logs = leadershipLogs[id] || [];
        updateSidebar(true, c, logs);
        mainContent.innerHTML = `<button id="back-btn" class="flex items-center space-x-2 text-teal-600 hover:text-teal-700 mb-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg><span>Back to communities</span></button><div class="bg-gradient-to-r from-orange-700 via-orange-600 to-orange-500 rounded-lg p-6 mb-6 text-white"><div class="flex items-start space-x-4"><div class="w-16 h-16 rounded-full bg-white bg-opacity-20 backdrop-blur flex items-center justify-center font-bold text-2xl">${
          c.avatar
        }</div><div class="flex-1"><h1 class="text-2xl font-bold mb-2">${
          c.name
        }</h1><p class="text-white text-opacity-90 mb-4">${
          c.description
        }</p><div class="flex items-center space-x-6 text-sm mb-4"><div><div class="text-2xl font-bold">${c.subscribers.toLocaleString()}</div><div class="text-white text-opacity-75">subscribers</div></div><div><div class="text-2xl font-bold">${
          c.pendingRewards
        }</div><div class="text-white text-opacity-75">pending rewards</div></div><div><div class="text-2xl font-bold">${
          c.posters
        }</div><div class="text-white text-opacity-75">active posters</div></div></div><div class="flex items-center space-x-3"><button class="px-6 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700">SUBSCRIBE</button><button class="px-6 py-2 bg-teal-500 text-white font-medium rounded hover:bg-teal-600 flex items-center space-x-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6 21H3v-3l15.232-15.232z"/></svg><span>NEW POST</span></button></div></div></div></div><div class="bg-white rounded-lg p-4 shadow-sm"><div class="flex justify-between items-center mb-4"><h2 class="text-lg font-semibold">Posts</h2><div class="relative"><button id="dropdown-btn-community" class="flex items-center justify-between w-40 space-x-2 px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50"><span>Trending</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button><div id="dropdown-menu-community" class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-10"><a href="#" class="block px-4 py-2 bg-gray-100 text-gray-900 font-semibold rounded-t-lg">Trending</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Hot</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">New</a><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-b-lg">Payouts</a></div></div></div><div class="space-y-4">${posts
          .map(
            (p) =>
              `<article class="border-b border-gray-200 pb-4 last:border-0 hover:bg-gray-50 p-3 rounded cursor-pointer transition-colors" data-community-post-id="${
                p.id
              }"><div class="flex space-x-3"><div class="flex-shrink-0"><div class="w-10 h-10 rounded-full bg-teal-500 text-white flex items-center justify-center font-bold text-sm">${
                p.avatar
              }</div></div><div class="flex-1 min-w-0"><div class="flex items-center space-x-2 text-xs text-gray-500 mb-1"><span class="font-medium text-gray-700">@${
                p.author
              }</span><span>(${p.reputation})</span>${
                p.badge
                  ? `<span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs font-medium">${p.badge}</span>`
                  : ""
              }<span>•</span><span>${p.time}</span>${
                p.isPinned ? '<span class="text-teal-600">📌 Pinned</span>' : ""
              }</div><h3 class="font-semibold text-gray-900 mb-1 hover:text-teal-600">${
                p.title
              }</h3><p class="text-gray-600 text-sm mb-2 line-clamp-2">${
                p.excerpt
              }</p><div class="flex items-center space-x-4 text-sm text-gray-500"><span class="text-pink-500 font-medium">↑↓ ${
                p.payout
              }</span><span>${
                p.votes
              } votes</span><span class="flex items-center space-x-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg><span>${
                p.comments
              }</span></span></div></div></div></article>`
          )
          .join("")}</div></div>`;
        document.getElementById("back-btn").addEventListener("click", () => {
          currentCommunity = null;
          renderCommunities();
        });
        const db = document.getElementById("dropdown-btn-community"),
          dm = document.getElementById("dropdown-menu-community");
        if (db)
          db.addEventListener("click", () => dm.classList.toggle("hidden"));
        document.querySelectorAll("[data-community-post-id]").forEach((a) =>
          a.addEventListener("click", function () {
            renderCommunityPostDetail(parseInt(this.dataset.communityPostId));
          })
        );
      }

      function renderCommunityPostDetail(id) {
        let p = null;
        for (let cid in communityPostsData) {
          const f = communityPostsData[cid].find((x) => x.id === id);
          if (f) {
            p = f;
            break;
          }
        }
        if (!p) return;
        const c = communitiesData.find((x) => x.id === currentCommunity),
          logs = leadershipLogs[currentCommunity] || [];
        updateSidebar(true, c, logs);
        mainContent.innerHTML = `<button id="back-to-community" class="flex items-center space-x-2 text-teal-600 hover:text-teal-700 mb-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg><span>Back to ${
          c ? c.name : "community"
        }</span></button><article class="bg-white rounded-lg p-6 shadow-sm"><div class="flex items-center space-x-3 mb-4"><div class="w-12 h-12 rounded-full bg-teal-500 text-white flex items-center justify-center font-bold">${
          p.avatar
        }</div><div><div class="flex items-center space-x-2"><span class="font-semibold text-gray-900">@${
          p.author
        }</span><span class="text-sm text-gray-500">(${p.reputation})</span>${
          p.badge
            ? `<span class="px-2 py-0.5 bg-green-100 text-green-700 rounded text-xs font-medium">${p.badge}</span>`
            : ""
        }</div><div class="text-sm text-gray-500">in #${p.category} • ${
          p.time
        }</div></div></div>${
          p.isPinned
            ? '<div class="mb-4 px-3 py-2 bg-teal-50 border-l-4 border-teal-500 text-sm text-teal-700 flex items-center space-x-2"><span>📌</span><span>This post is pinned by community moderators</span></div>'
            : ""
        }<h1 class="text-3xl font-bold text-gray-900 mb-4">${
          p.title
        }</h1><div class="prose max-w-none mb-6"><p class="text-gray-700 leading-relaxed">${
          p.excerpt
        }</p><p class="text-gray-700 leading-relaxed mt-4">This is the full content of the blog post. In a real implementation, this would contain the complete post content with proper formatting, images, embedded media, and other rich content elements that the author included.</p><p class="text-gray-700 leading-relaxed mt-4">Community posts often include detailed discussions, tutorials, updates, and various types of content that engage the community members and contribute to the overall knowledge base of the platform.</p></div><div class="flex items-center justify-between border-t border-gray-200 pt-4"><div class="flex items-center space-x-6 text-sm"><button class="flex items-center space-x-1 text-gray-600 hover:text-teal-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg><span>Upvote</span></button><button class="flex items-center space-x-1 text-gray-600 hover:text-red-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg><span>Downvote</span></button><span class="text-pink-500 font-medium text-lg">${
          p.payout
        }</span></div><div class="flex items-center space-x-4 text-sm text-gray-600"><span>${
          p.votes
        } votes</span><span>${
          p.comments
        } comments</span></div></div></article><div class="bg-white rounded-lg p-6 shadow-sm mt-4"><h3 class="font-semibold text-gray-900 mb-4">${
          p.comments
        } Comments</h3><div class="space-y-4">${
          p.comments > 0
            ? '<div class="border-b border-gray-200 pb-4"><div class="flex items-start space-x-3"><div class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-sm">U</div><div class="flex-1"><div class="flex items-center space-x-2 mb-1"><span class="font-semibold text-sm">@user123</span><span class="text-xs text-gray-500">• 1 hour ago</span></div><p class="text-gray-700 text-sm">Great post! Very informative and helpful for the community.</p><div class="flex items-center space-x-3 mt-2 text-xs text-gray-500"><button class="hover:text-teal-600">Reply</button><span>↑ 5</span></div></div></div></div>'
            : ""
        }<div class="pt-2"><textarea placeholder="Write a comment..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500" rows="3"></textarea><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded hover:bg-teal-600">Post Comment</button></div></div></div>`;
        document
          .getElementById("back-to-community")
          .addEventListener("click", () =>
            renderCommunityDetail(currentCommunity)
          );
      }

      allPostsLink.addEventListener("click", (e) => {
        e.preventDefault();
        currentView = "posts";
        currentCommunity = null;
        allPostsLink.classList.add("active-tab");
        communitiesLink.classList.remove("active-tab");
        renderPosts();
      });
      communitiesLink.addEventListener("click", (e) => {
        e.preventDefault();
        currentView = "communities";
        currentCommunity = null;
        communitiesLink.classList.add("active-tab");
        allPostsLink.classList.remove("active-tab");
        renderCommunities();
      });

      if (mobileNavBtn && mobileNavMenu) {
        mobileNavBtn.addEventListener("click", () =>
          mobileNavMenu.classList.toggle("hidden")
        );
        mobileNavMenu.querySelectorAll("a").forEach((l) =>
          l.addEventListener("click", (e) => {
            const n = e.target.dataset.nav;
            if (n === "all-posts") {
              e.preventDefault();
              mobileNavLabel.textContent = "All posts";
              currentView = "posts";
              currentCommunity = null;
              if (allPostsLink) {
                allPostsLink.classList.add("active-tab");
                communitiesLink.classList.remove("active-tab");
              }
              renderPosts();
              mobileNavMenu.classList.add("hidden");
            } else if (n === "communities") {
              e.preventDefault();
              mobileNavLabel.textContent = "Communities";
              currentView = "communities";
              currentCommunity = null;
              if (communitiesLink) {
                communitiesLink.classList.add("active-tab");
                allPostsLink.classList.remove("active-tab");
              }
              renderCommunities();
              mobileNavMenu.classList.add("hidden");
            } else if (n === "profile") {
              e.preventDefault();
              mobileNavLabel.textContent = "My Profile";
              mobileNavMenu.classList.add("hidden");
              alert("Profile page would load here");
            } else if (n === "wallet") {
              e.preventDefault();
              mobileNavLabel.textContent = "My Wallet";
              mobileNavMenu.classList.add("hidden");
              alert("Wallet page would load here");
            }
          })
        );
      }

      loginBtn.addEventListener("click", () => {
        loginModal.classList.remove("hidden");
        loginModal.classList.add("flex");
      });
      closeLogin.addEventListener("click", () => {
        loginModal.classList.add("hidden");
        loginModal.classList.remove("flex");
      });
      loginModal.addEventListener("click", (e) => {
        if (e.target === loginModal) {
          loginModal.classList.add("hidden");
          loginModal.classList.remove("flex");
        }
      });
      hamburgerBtn.addEventListener("click", () => {
        sideMenu.classList.remove("translate-x-full");
        menuOverlay.classList.remove("hidden");
      });
      closeMenu.addEventListener("click", () => {
        sideMenu.classList.add("translate-x-full");
        menuOverlay.classList.add("hidden");
      });
      menuOverlay.addEventListener("click", () => {
        sideMenu.classList.add("translate-x-full");
        menuOverlay.classList.add("hidden");
      });
      window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
          backToTop.classList.remove("opacity-0", "invisible");
          backToTop.classList.add("opacity-100", "visible");
        } else {
          backToTop.classList.remove("opacity-100", "visible");
          backToTop.classList.add("opacity-0", "invisible");
        }
      });
      backToTop.addEventListener("click", () =>
        window.scrollTo({ top: 0, behavior: "smooth" })
      );
      document.addEventListener("click", (e) => {
        const dd = document.getElementById("dropdown-menu"),
          db = document.getElementById("dropdown-btn");
        if (dd && db && !db.contains(e.target) && !dd.contains(e.target))
          dd.classList.add("hidden");
        if (
          mobileNavMenu &&
          mobileNavBtn &&
          !mobileNavBtn.contains(e.target) &&
          !mobileNavMenu.contains(e.target)
        )
          mobileNavMenu.classList.add("hidden");
      });

      renderPosts();
    </script>

<?php 
get_footer();