
    <footer>
      <a href="#"><img src="./img/wa.png" alt="wa" /><span>Whatsapp</span></a>
    </footer>
    <script>
      const burger = document.querySelector(".menu-right");
      const menus = document.querySelector(".menu-list");

      burger.addEventListener("click", () => {
        menus.style.display = menus.style.display == "none" ? "flex" : "none";
      });
    </script>
  </body>
</html>
