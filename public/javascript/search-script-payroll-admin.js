document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector(".table-body");
    const rows = tableBody.querySelectorAll(".table-row");
    const notFoundMessage = document.getElementById("notFoundMessage");

    searchInput.addEventListener("input", function (e) {
        const searchTerm = e.target.value.trim().toLowerCase();
        let hasResult = false;

        rows.forEach(row => {
            const cells = row.querySelectorAll(".table-cell"); // Assuming all cells have this class

            // Skip processing if this row has no cells or if it's the header row
            if (cells.length === 0 || row.classList.contains("table-header")) {
                return;
            }

            let found = false;

            // Iterate over each cell except the last cell (action cell)
            for (let i = 0; i < cells.length - 1; i++) {
                const cell = cells[i];
                const cellText = cell.textContent.trim().toLowerCase();

                if (cellText.includes(searchTerm)) {
                    found = true;
                    hasResult = true;
                    highlightText(cell, searchTerm); // Highlight the search term
                }
            }

            // Hide or show the row based on search result
            if (found) {
                row.style.display = ""; // Show the row
            } else {
                row.style.display = "none"; // Hide the row
            }
        });

        // Show or hide the "NOT FOUND" message based on search results
        notFoundMessage.style.display = hasResult ? "none" : "flex";
    });

    // Function to highlight the search term in a cell
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
