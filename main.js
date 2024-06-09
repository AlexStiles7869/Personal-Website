'use strict'

// Navigation

window.onscroll = () => {
    let header = document.getElementsByTagName("header")[0];
    let nav = document.getElementsByTagName("nav")[0];

    if (window.pageYOffset >= header.scrollHeight - nav.scrollHeight) {
        nav.style.transform = `translateY(${-nav.scrollHeight + "px"})`;
    } else {
        nav.style.transform = '';
    }
}

// Colouring of projects section

let project_cards = document.getElementsByClassName("project-card");
const colorThief = new ColorThief();
let colours = []

function set_projects_background(img, colours) {

    let styles = `
    #projects-anchor.${img.id}-hover {
        background-color: rgba(${colours[0]}, ${colours[1]}, ${colours[2]}, 0.2);
    }
`;

    let styleSheet = document.createElement("style");
    styleSheet.type = "text/css";
    styleSheet.innerText = styles;
    document.head.appendChild(styleSheet);

    img.addEventListener("mouseover", () => {
        const project_cards_container = document.getElementById("projects-anchor");
        project_cards_container.className = '';
        project_cards_container.classList.add(`${img.id}-hover`);
    });

    img.addEventListener("mouseout", () => {
        const project_cards_container = document.getElementById("projects-anchor");
        project_cards_container.classList.remove(`${img.id}-hover`);
    });
}

for (let i = 0; i < project_cards.length; i++) {
    let img = project_cards[i].querySelector("img");
    img.id = `img-${i}`;
    if (img.complete) {
        colours = colorThief.getColor(img);
        set_projects_background(img, colours);
    } else {
        img.addEventListener("load", () => {
            colours = colorThief.getColor(img);
            set_projects_background(img, colours);
        });
    }

}

var options = {
  strings: ["Hi. My name is Alex Stiles.", "I'm a student in Christchurch, New Zealand", "I'm studying Embedded Systems", "I'm studying Electronics", "I'm studying Computer Architecture"],
  typeSpeed: 40,
  backspaceSpeed: 30,
  smartBackspace:  true,
  loop: true,
  backDelay: 1000,
  startDelay: 500,
  cursorChar: '|',
};

var typed = new Typed('.intro', options);