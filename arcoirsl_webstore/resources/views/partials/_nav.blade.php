<nav class="nav">
    <div class="new nav-select" onclick="navshow(1)">
        <button>&nbsp NEW &nbsp</button>
    </div>
    <div class="sale" onclick="navshow(2)">
        <button>&nbsp SALE &nbsp</button>
    </div>
    <div class="option1">
        <button>&nbsp SALE1 &nbsp</button>
    </div>
    <div class="option2">
        <button>&nbsp SALE2 &nbsp</button>
    </div>
    <div class="option3">
        <button>&nbsp SALE3 &nbsp</button>
    </div>
</nav>


<script>
    function navshow(option) {
        let container_1 = document.querySelector(".container-option-1");
        let new_nav = document.querySelector(".new");
        let container_2 = document.querySelector(".container-option-2");
        let sale_nav = document.querySelector(".sale");
        if (option == 1) {
            container_1.style.display = "flex";
            container_2.style.display = "none";
            if (!new_nav.classList.contains("nav-select")) {
                new_nav.classList.add("nav-select");
                sale_nav.classList.remove("nav-select");
            }
        } else {
            container_2.style.display = "flex";
            container_1.style.display = "none";

            if (!sale_nav.classList.contains("nav-select")) {
                sale_nav.classList.add("nav-select");
                new_nav.classList.remove("nav-select");
            }
        }
    }
</script>
