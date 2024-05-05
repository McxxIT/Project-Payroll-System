

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector(".table-body");
    const rows = tableBody.querySelectorAll(".table-row");
    const notFoundMessage = document.getElementById("notFoundMessage");

    searchInput.addEventListener("input", function (e) {
        const searchTerm = e.target.value.trim().toLowerCase();
        let hasResult = false;

        rows.forEach(row => {
            const cells = row.querySelectorAll(".table-cell");
            let found = false;

            cells.forEach((cell, index) => {
                if (index !== 4 && index !==
                    5) { // Exclude Status (index 4) and Action (index 5) columns
                    const cellText = cell.textContent.trim().toLowerCase();

                    if (index === 0 || index === 1 || index ===
                        2) { // ID, Name, Position
                        if (cellText.includes(searchTerm)) {
                            found = true;
                            hasResult = true;
                            highlightFirstLetter(cell,
                                searchTerm); // Highlight first letter
                        }
                    } else if (index === 3) { // Department
                        if (cellText.startsWith(searchTerm)) {
                            found = true;
                            hasResult = true;
                            highlightFirstLetter(cell,
                                searchTerm); // Highlight first letter
                        }
                    }
                }
            });

            if (found) {
                row.style.display = ""; // Show the row
            } else {
                row.style.display = "none"; // Hide the row
            }
        });

        // Show or hide the "NOT FOUND" message based on search results
        if (hasResult) {
            notFoundMessage.style.display = "none";
        } else {
            notFoundMessage.style.display = "flex"; // Display "NOT FOUND" message
        }
    });

    function highlightFirstLetter(cell, searchTerm) {
        const cellText = cell.textContent.trim().toLowerCase();
        const index = cellText.indexOf(searchTerm);

        if (index !== -1) {
            const highlightedText = `<span class="highlight">${searchTerm}</span>`;
            const newText = cellText.substring(0, index) + highlightedText + cellText.substring(index +
                searchTerm.length);
            cell.innerHTML = newText;
        }
    }
});