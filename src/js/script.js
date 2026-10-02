const botoesvinho = document.querySelectorAll('.dangoBotao')

botoesvinho.forEach(botao => {
    botao.addEventListener('mouseenter', () => {
        botao.style.backgroundColor = '#731F35'
    })
    botao.addEventListener('mouseleave', () => {
        botao.style.backgroundColor = '#59551E'
    })
})


const botoesazul = document.querySelectorAll('.dangoBotaoazul')

botoesazul.forEach(botao => {
    botao.addEventListener('mouseenter', () => {
        botao.style.backgroundColor = '#A0BED9'
        botao.style.color = '#594834'
    })
    botao.addEventListener('mouseleave', () => {
        botao.style.backgroundColor = '#59551E'
        botao.style.color = '#F2DEA2'
    })
})


const botoesinicio = document.querySelectorAll('.newpage')

botoesinicio.forEach(botao => {
    botao.addEventListener('mouseenter', () => {
        botao.style.backgroundColor = '#F2DEA2'
        botao.style.color = '#594834'
    })
    botao.addEventListener('mouseleave', () => {
        botao.style.backgroundColor = '#59551E'
        botao.style.color = '#F2DEA2'
    })
})