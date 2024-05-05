document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector(".table-body-1");
    const rows = tableBody.querySelectorAll(".table-row-1");
    const notFoundMessage = document.getElementById("notFoundMessage");

    searchInput.addEventListener("input", function (e) {
        const searchTerm = e.target.value.trim().toLowerCase();
        let hasResult = false;

        rows.forEach(row => {
            const cells = row.querySelectorAll(".applicant-cell");

            if (cells.length === 0 || row.classList.contains("table-header-1")) {
                return;
            }

            let found = false;
            cells.forEach((cell, index) => {
                if (index === 4) return;
                const cellText = cell.textContent.trim().toLowerCase();
                if (cellText.includes(searchTerm)) {
                    found = true;
                    hasResult = true;
                }
            });

            if (found) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        notFoundMessage.style.display = hasResult ? "none" : "flex";
    });
    function highlightText(cell, searchTerm) {
        const cellText = cell.textContent.trim();
        const index = cellText.toLowerCase().indexOf(searchTerm);

        if (index !== -1) {
            const highlightedText = `<span class="highlight">${cellText.substring(index, index + searchTerm.length)}</span>`;
            const newText = cellText.substring(0, index) + highlightedText + cellText.substring(index + searchTerm.length);
            cell.innerHTML = newText;
        }
    }
});
