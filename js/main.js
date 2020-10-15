        var slider = document.getElementById('slider');
        var Bike = document.getElementById('bike-slider');
        var active = document.getElementById('active');
        var line1 = document.getElementById('line1');
        var line2 = document.getElementById('line2');
        var line3 = document.getElementById('line3');
        var line4 = document.getElementById('line4');

        let thumbnails = document.getElementsByClassName('thumbnail');
        let activeimage = document.getElementsByClassName('active');



        line1.onclick = function() {
            slider.style.transform = 'translateX(0)';
            Bike.style.transform = 'translateX(0)';
            active.style.top = '0px';
        }
        line2.onclick = function() {
            slider.style.transform = 'translateX(-25%)';
            Bike.style.transform = 'translateX(-25%)';
            active.style.top = '80px';
        }
        line3.onclick = function() {
            slider.style.transform = 'translateX(-50%)';
            Bike.style.transform = 'translateX(-50%)';
            active.style.top = '140px';
        }
        line4.onclick = function() {
                slider.style.transform = 'translateX(-75%)';
                Bike.style.transform = 'translateX(-75%)';
                active.style.top = '200px';
            }
            // for blue and red
        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[0].addEventListener('mouseover', function() {
                if (activeimage.length > 0) {
                    // activeimage[0].classList.remove('active');
                    slider.style.transform = 'translateX(0)';
                    Bike.style.transform = 'translateX(0)';
                    active.style.top = '0px';
                }
                this.classList.add('active')
                document.getElementById('bike').src = this.src
            })
            thumbnails[1].addEventListener('mouseover', function() {
                if (activeimage.length > 0) {
                    // activeimage[1].classList.remove('active');
                    slider.style.transform = 'translateX(-25%)';
                    Bike.style.transform = 'translateX(-25%)';
                    active.style.top = '80px';
                }
                this.classList.add('active')
                document.getElementById('bike').src = this.src
            })
        }
        // for green and yellow
        for (var i = 2; i < thumbnails.length; i++) {
            thumbnails[2].addEventListener('mouseover', function() {
                if (activeimage.length > 2) {
                    slider.style.transform = 'translateX(-50%)';
                    Bike.style.transform = 'translateX(-50%)';
                    active.style.top = '140px';
                }
                this.classList.add('active')
                document.getElementById('bike').src = this.src
            })
            thumbnails[3].addEventListener('mouseover', function() {
                if (activeimage.length > 3) {
                    slider.style.transform = 'translateX(-75%)';
                    Bike.style.transform = 'translateX(-75%)';
                    active.style.top = '200px';
                }
                this.classList.add('active')
                document.getElementById('bike').src = this.src
            })
        }