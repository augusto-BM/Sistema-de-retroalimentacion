<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Formulario Multipasos :: Urian Viera</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../principal/script.js"></script>

</head>

<body>
    <div class="container">
        <header>Detalles del examen</header>
        <div class="custom-progress-bar" style="--steps: 4;"></div>
        <div class="form-outer">
            <form action="../../../controlador/controlador-backoffice/crearPreguntas.php" id="multi-step-form" method="POST">
                <!-- Aquí se añadirán los pasos dinámicamente -->
            </form>
        </div>
        <script>
            const steps = [{
                title: "Pregunta 1",
                fields: ["Nombre de la pregunta", "respuesta correcta", "puntaje", "opcion 1", "opcion 2", "opcion 3", "opcion 4", "opcion 5"]
            },
            {
                title: "Pregunta 2",
                fields: ["Nombre de la pregunta", "respuesta correcta", "puntaje", "opcion 1", "opcion 2", "opcion 3", "opcion 4", "opcion 5"]
            }/* ,
            {
                title: "Pregunta 3",
                fields: ["Nombre de la pregunta", "respuesta correcta", "puntaje", "opcion 1", "opcion 2", "opcion 3", "opcion 4", "opcion 5"]
            },
            {
                title: "Pregunta 4",
                fields: ["Nombre de la pregunta", "respuesta correcta", "puntaje", "opcion 1", "opcion 2", "opcion 3", "opcion 4", "opcion 5"]
            } */];

            const form = document.getElementById('multi-step-form');
            const progressContainer = document.querySelector('.custom-progress-bar');

            // Iterar sobre los pasos y agregarlos al formulario
            steps.forEach((step, index) => {
                const pageNum = index + 1;

                // Agregar el paso al formulario
                const page = document.createElement('div');
                page.classList.add('page');
                if (pageNum === 1) {
                    page.classList.add('slide-page'); // Añadir la clase slide-page solo al primer paso
                }

                // Título del paso
                const titleDiv = document.createElement('div');
                titleDiv.classList.add('title');
                titleDiv.textContent = step.title;
                titleDiv.style.textAlign = 'center';
                titleDiv.style.marginBottom = '20px';

                page.appendChild(titleDiv);

                // Campos del paso
                const row1 = document.createElement('div');
                row1.classList.add('row', 'justify-content-center');
                const row2 = document.createElement('div');
                row2.classList.add('row', 'justify-content-center');
                const row3 = document.createElement('div');
                row3.classList.add('row', 'justify-content-center');

                step.fields.forEach((field, index) => {
                    const fieldDiv = document.createElement('div');
                    if ([0, 1, 2].includes(index)) {
                        fieldDiv.classList.add('col-md-4'); // Primera fila
                        row1.appendChild(fieldDiv);
                    } else if ([3, 4, 5].includes(index)) {
                        fieldDiv.classList.add('col-md-4'); // Segunda fila
                        fieldDiv.style.margin = '20px 0 10px 0'; // Añadir margen a los elementos de la segunda fila
                        row2.appendChild(fieldDiv);
                    } else {
                        fieldDiv.classList.add('col-md-4'); // Tercera fila
                        row3.appendChild(fieldDiv);
                    }

                    const labelDiv = document.createElement('div');
                    labelDiv.classList.add('label');
                    labelDiv.textContent = field;
                    fieldDiv.appendChild(labelDiv);

                    const input = document.createElement('input');
                    input.setAttribute('type', 'text'); // Aquí puedes ajustar el tipo según el campo
                    input.setAttribute('name', `${field.toLowerCase().replace(' ', '_')}${pageNum}`); // Añadir el atributo name con el número de la página
                    fieldDiv.appendChild(input);
                });

                page.appendChild(row1);
                page.appendChild(row2);
                page.appendChild(row3);

                // Botones de navegación entre pasos
                const btnDiv = document.createElement('div');
                btnDiv.classList.add('field', 'btns');

                if (pageNum > 1) {
                    const prevBtn = document.createElement('button');
                    prevBtn.classList.add(`prev-${pageNum - 1}`, 'prev');
                    prevBtn.textContent = 'Atrás';
                    btnDiv.appendChild(prevBtn);
                }

                if (pageNum === steps.length) { // Si es el último paso
                    const submitBtn = document.createElement('button');
                    submitBtn.classList.add('submit');
                    submitBtn.textContent = 'Enviar';
                    btnDiv.appendChild(submitBtn);
                } else {
                    const nextBtn = document.createElement('button');
                    nextBtn.classList.add(`next-${pageNum}`, 'next');
                    nextBtn.textContent = 'Siguiente';
                    btnDiv.appendChild(nextBtn);
                }

                page.appendChild(btnDiv);

                form.appendChild(page);

                // Actualizar la barra de progreso
                const stepDiv = document.createElement('div');
                stepDiv.classList.add('step');
                if (pageNum === 1) {
                    stepDiv.classList.add('slide-page');
                }

                const stepTitle = document.createElement('p');
                stepTitle.textContent = `Pregunta ${pageNum}`;
                stepDiv.appendChild(stepTitle);

                const bulletDiv = document.createElement('div');
                bulletDiv.classList.add('bullet');
                if (pageNum === 1) {
                    bulletDiv.classList.add('active');
                }
                const bulletSpan = document.createElement('span');
                bulletSpan.textContent = pageNum;
                bulletDiv.appendChild(bulletSpan);
                stepDiv.appendChild(bulletDiv);

                const checkDiv = document.createElement('div');
                checkDiv.classList.add('check', 'fas', 'fa-check');
                stepDiv.appendChild(checkDiv);

                progressContainer.appendChild(stepDiv);
            });

            // Actualizar la barra de progreso inicialmente
            const bullet = document.querySelectorAll('.step .bullet');
            let current = 1;

            function updateProgress() {
                bullet.forEach((bullet, idx) => {
                    if (idx < current) {
                        bullet.classList.add("active");
                    } else {
                        bullet.classList.remove("active");
                    }
                });

                const totalProgress = ((current - 1) / (bullet.length - 1)) * 100;
                document.documentElement.style.setProperty("--progress-width", `${totalProgress}%`);
            }

            // Event listeners para los botones de navegación entre pasos
            const nextBtns = document.querySelectorAll(".next");
            const prevBtns = document.querySelectorAll(".prev");

            nextBtns.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    if (current < bullet.length) { // Cambiar a 'bullet.length'
                        current += 1;
                        form.style.marginLeft = `-${(current - 1) * 100}%`;
                        updateProgress();
                    }
                });
            });

            prevBtns.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    if (current > 1) {
                        current -= 1;
                        form.style.marginLeft = `-${(current - 1) * 100}%`;
                        updateProgress();
                    }
                });
            });

            updateProgress(); // Actualizar la barra de progreso inicialmente
        </script>
    </div>
</body>

</html>