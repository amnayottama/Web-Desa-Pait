import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
import DataTable from "datatables.net-dt";

window.Alpine = Alpine;

Alpine.start();

let table = new DataTable("#myTable", {
    initComplete: function () {
        const searchInput = document.getElementById("dt-search-0");
        const dropDown = document.getElementById("dt-length-0");
        const layoutRows = document.querySelectorAll(".dt-layout-row");
        const dtSearch = document.querySelector(".dt-search");
        const pagingButtons = document.querySelectorAll(".dt-paging-button");
        const dtInfo = document.querySelector(".dt-info");

        pagingButtons.forEach((button) => {
            button.classList.add(
                "text-gray-500",
                "text-xl",
                "px-1",
                "border",
                "rounded-md",
                "hover:bg-gray-200",
                "rounded-md"
            );
        });

        dtInfo.classList.add("text-gray-500");

        if (dtSearch && searchInput) {
            // Membuat elemen div baru sebagai container untuk searchInput dan searchIcon
            const searchContainer = document.createElement("div");
            searchContainer.classList.add(
                "relative",
                "flex",
                "px-2",
                "items-center",
                "border",
                "border-gray-300",
                "rounded-md",
                "bg-gray-100"
            );

            // Membuat elemen SVG dengan isi yang sudah ada
            const searchIcon = document.createElement("div");
            searchIcon.innerHTML = `
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"></path>
                </svg>
            `;

            // Menambahkan SVG ke dalam container
            searchContainer.appendChild(searchIcon);

            // Menambahkan searchInput ke dalam container
            searchContainer.appendChild(searchInput);

            // Menambahkan searchContainer ke dalam dtSearch
            dtSearch.appendChild(searchContainer);

            // Mengatur gaya untuk SVG
            searchIcon.style.left = "10px"; // Atur jarak dari kiri
            searchIcon.style.top = "50%"; // Posisikan di tengah vertikal
            searchIcon.style.transform = "translateY(0)"; // Pindahkan gambar setengah tinggi gambar ke atas agar terpusat

            // Menggunakan Tailwind CSS untuk styling searchInput
            searchInput.classList.add(
                "pl-10",
                "p-2",
                "border-gray-100",
                "bg-gray-100",
                "focus:ring-gray-100",
                "w-full"
            );
            searchInput.placeholder = "Search for items";

            // Mencari elemen label berdasarkan atribut for dan menghapusnya
            const label = document.querySelector('label[for="dt-search-0"]');
            if (label) {
                label.remove(); // Menghapus elemen label dari DOM
            }
        }

        // Memastikan hanya dua elemen yang akan diubah
        layoutRows.forEach((layoutRow) => {
            // Menghapus kelas dt-layout-row
            layoutRow.classList.remove("dt-layout-row");
            // Menambahkan kelas flex dan justify-between
            layoutRow.classList.add("flex", "justify-between");
        });

        if (dropDown) {
            dropDown.classList.add("dt-input");

            dropDown.classList.add(
                "text-gray-500",
                "bg-white",
                "border-gray-300",
                "focus:outline-none",
                "hover:bg-gray-100",
                "focus:ring-4",
                "focus:ring-gray-100",
                "font-medium",
                "rounded-lg",
                "text-sm",
                "px-5",
                "py-1.5"
            );

            const label = document.querySelector('label[for="dt-length-0"]');
            if (label) {
                label.remove();
            }
        }
    },
});
