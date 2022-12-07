document.querySelector('#continuar').addEventListener('click', e => {
    for (let i of document.querySelectorAll('.inputTela1')) {
        i.style.display = 'none'
    }

    document.querySelector('#tela').innerHTML = document.querySelector('#tela').innerHTML + `
        <div class="d-flex flex-column bd-highlight">
            <p class="fs-6">Estamos quase lá! preencha este formulário para agendar seu horário:</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data</span>
                <input name="date" type="date" id="date" class="form-control" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Horário</span>
                <input name="time" type="time" id="time" class="form-control" required>
            </div>
            <select name="cidade" id="cidade" class="form-select">
                <option value="Selecione">Selecione o Serviço</option>
                <option value="Cabelo">Cabelo R$20,00 Reais</option>
                <option value="Barba">Barba R$20,00 Reais</option>
                <option value="Outros">Outros...</option>
            </select><br>
            <div>
  <input  type="checkbox" value="Cabelo" > Cabelo R$ 20,00 Reais<br>
  <input  type="checkbox" value="Barba" > Barba R$ 20,00 Reais<br>
  <input  type="checkbox" value="Outros" > Hidratacao R$ 20,00 Reais<br>
    </div>
        </div>
    `
    document.querySelector('#header').innerHTML = 'Selecionar Serviço'
    document.querySelector('#continuar').style.display = 'none'
    document.querySelector('#enviar').style.display = 'block'
})