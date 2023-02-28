<!-- IMPORTANT FILES -->

<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
</script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        class Calendar {
    constructor(inputSelector) {
        this.input = document.querySelector(inputSelector);
        this.form = this.input.parentElement;
        this.popupContainer = null;
        this.monthContainer = null;
        this.tableContainer = null;
        this.table = document.createElement("table");
        this.months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        this.selectedMonth = new Date().getMonth();
        this.selectedYear = new Date().getFullYear();
        
        this.buildCalendar();
        this.setMainEventListener();
    }
    
    buildCalendar() {
        this.popupContainer = document.createElement("div");
        this.popupContainer.classList.add("calendar-popup");
        this.form.appendChild(this.popupContainer);

        
        this.monthContainer = document.createElement("div");
        this.monthContainer.classList.add("month-and-year");
        this.monthContainer.innerHTML = `<h4>${this.getMonth()} ${this.getYear()}</h4>`;
        this.popupContainer.appendChild(this.monthContainer);

        this.createButtons();

        this.populateTable(this.selectedMonth, this.selectedYear);
    }

    createButtons() {
        const prev = document.createElement("button");
        prev.classList.add('button', 'prev');
        prev.innerHTML = "<i class='fas fa-chevron-left'></i>";
        const next = document.createElement("button");
        next.classList.add('button', 'next');
        next.innerHTML = "<i class='fas fa-chevron-right'></i>";

        prev.addEventListener("click", e => {
            e.preventDefault();
            this.updateMonth(this.selectedMonth - 1);
        });

        next.addEventListener("click", e => {
            e.preventDefault();
            this.updateMonth(this.selectedMonth + 1);
        });

        this.popupContainer.appendChild(prev);
        this.popupContainer.appendChild(next);
    }

    populateTable(month, year) {
        this.table.innerHTML = "";

        const namesRow = document.createElement("tr");
        ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].forEach(name => {
            const th = document.createElement("th");
            th.innerHTML = name;
            namesRow.appendChild(th);
        });
        this.table.appendChild(namesRow);

        const tempDate = new Date(year, month, 1);
        let firstMonthDay = tempDate.getDay();
        firstMonthDay = firstMonthDay === 0 ? 7 : tempDate.getDay();

        const daysInMonth = this.getDaysInMonth(month, year);
        const j = daysInMonth + firstMonthDay - 1;

        let tr = document.createElement("tr");

        if (firstMonthDay-1 !== 0) {
            tr = document.createElement("tr");
            this.table.appendChild(tr);
        }

        for (let i=0; i<firstMonthDay-1; i++) {
            const td = document.createElement("td");
            td.innerHTML = "";
            tr.appendChild(td);
        }

        for (let i = firstMonthDay-1; i<j; i++) {
            if(i % 7 === 0){
                tr = document.createElement("tr");
                this.table.appendChild(tr);
            }

            const td = document.createElement("td");
            td.innerText = i - firstMonthDay + 2;
            td.dayNr = i - firstMonthDay + 2;
            td.classList.add("day");

            td.addEventListener("click", e => {
                const selectedDay = e.target.innerHTML;
                this.fillInput(selectedDay);
                this.hideCalendar();
            });

            tr.appendChild(td);
        }

        this.popupContainer.appendChild(this.table);
    }

    fillInput(day) {
        day = day < 10 ? "0" + day : day;
        let month = null;
        month = this.selectedMonth < 9 ? "0" + (this.selectedMonth + 1) : this.selectedMonth + 1;
        this.input.value = `${day}.${month}.${this.selectedYear}`;
    }

    updateMonth(month) {
        this.selectedMonth = month;
        if (this.selectedMonth < 0) {
            this.selectedYear--;
            this.selectedMonth = 11;
        } else if (this.selectedMonth > 11) {
            this.selectedYear++;
            this.selectedMonth = 0;
        }
        this.monthContainer.innerHTML = `<h4>${this.months[this.selectedMonth]} ${this.selectedYear}</h4>`;

        this.populateTable(this.selectedMonth, this.selectedYear)
    }
    
    getMonth() {
        return this.months[this.selectedMonth];
    }

    getYear() {
        return this.selectedYear;
    }

    getDaysInMonth(month, year) {
        return new Date(year, month + 1, 0).getDate();
    }
    
    hideCalendar() {
        this.form.classList.remove("open");
    }

    setMainEventListener() {
        this.input.addEventListener("click", e => {
            this.form.classList.toggle("open");
            
            if(!this.form.classList.contains("open")) {
                this.hideCalendar();
            }
        });
    }
}

new Calendar(".date-input");
    </script>
</body>

</html>