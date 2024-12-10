document.addEventListener("DOMContentLoaded",()=>{const i=document.querySelectorAll(".product-button"),d=document.querySelector("#nota-venta-body"),l=document.getElementById("total-general"),c=document.getElementById("pago"),s=document.getElementById("cambio");let a=[],n=0;function u(){d.innerHTML="",n=0,a.forEach(t=>{const e=t.cantidad*t.precio;n+=e;const o=document.createElement("tr");o.innerHTML=`
                <td>${t.cantidad}</td>
                <td>${t.producto}</td>
                <td>$${t.precio.toFixed(2)}</td>
                <td>$${e.toFixed(2)}</td>
            `,d.appendChild(o)}),l.textContent=`$${n.toFixed(2)}`}i.forEach(t=>{t.addEventListener("click",()=>{const e=t.getAttribute("data-producto"),o=parseFloat(t.getAttribute("data-precio")),r=a.find(p=>p.producto===e);r?r.cantidad+=1:a.push({producto:e,cantidad:1,precio:o,total:o}),u()})}),c.addEventListener("input",()=>{const e=(parseFloat(c.value)||0)-n;s.textContent=e>=0?`$${e.toFixed(2)}`:"Pago insuficiente"})});
