<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Joki Genshin</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@400;700&display=swap');
      * {
        padding: 0;
        margin: 0;
        font-family: 'Chivo Mono', monospace;
      }
      body {
        background-color: pink;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      nav {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .title {
        background-color: #ffdde3;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .title img {
        width: 4em;
        margin: 1em 0em 1em 4em;
      }
      .menus {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: white;
        width: 100%;
        margin-top: 1em;
        padding: 1em 0em;
      }
      .menus svg {
        width: 2em;
        color: #e77588;
      }
      .menu-left {
        margin-left: 4em;
        display: flex;
        gap: 1em;
      }
      .menu-right {
        margin-right: 4em;
      }
      footer {
        background-color: #ffdde3;
        display: flex;
        justify-content: center;
        padding: 2em 0em;
      }
      .menu-list {
        background-color: #ffdde3;
        flex-direction: column;
        /* align-items: center; */
      }
      .menu-list a {
        padding: 1em 0em;
        width: 100%;
        text-align: center;
        transition: all 0.2s;
        font-weight: bold;
        color: #e77588;
        text-decoration: none;
      }
      .menu-list a:hover {
        background-color: #fff;
      }
      footer a {
        display: flex;
        align-items: center;
        gap: 1em;
        font-weight: bold;
        color: #e77588;
        text-decoration: none;
      }
      footer a img {
        width: 1.5em;
      }
      main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2em 0em;
      }
      .hero-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1em;
        transition: all 0.2s;
        padding: 2em 1em;
      }
      .hero-button img {
        width: 7em;
      }
      .hero-button:hover {
        background: #ffdde3;
      }
      .pricelist, .transaction {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 2em;
      }
      .wrapper {
        background-color: #fff;
        padding: 3em;
        border-radius: 20px;
        display: flex;
        gap: 2em;
      }
      .wrapper button, .wrapper input{
        background-color: lightgrey;
        outline: none;
        border: none;
        padding: 1em 2em;
        font-weight: bold;
        border-radius: 10px;
        transition: all 0.2s;
      
      }
        .wrapper button {
            cursor: pointer;
        }
      .wrapper button:hover, .wrapper input:hover {
        background-color: gray;
      }
      .form-item {
        display: flex;
        flex-direction: column;
      }
      .form-item label {
        font-weight: bold;
      }
      .submit-button {
        background-color: blue;
        color: white;
        outline: none;
        border: none;
        padding: 1em 2em;
        font-weight: bold;
        border-radius: 10px;
        transition: all 0.2s;
        cursor: pointer;
      }
      .submit-button:hover {
        background-color: lightseagreen;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <div class="title">
          <img src="./img/logo.png" alt="logo" />
          <h1>JASA JOKI GENSHIN IMPACT</h1>
          <div style="width: 5em"></div>
        </div>
        <div class="menus">
          <div class="menu-left">
            <a href="./index.php"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                />
              </svg> </a
            ><a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                />
              </svg>
            </a>
          </div>
          <a href="#" class="menu-right"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </a>
        </div>
      </nav>
      <div class="menu-list" style="display: none">
        <a href="./index.php">Home</a>
        <a href="./pricelist.php">Pricelist</a>
        <a href="./transaction.php">Transaction</a>
      </div>
    </header>