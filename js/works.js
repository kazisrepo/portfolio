let projectSections = document.getElementById("section-projects");
const projects = [
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Expense Tracker (Personal Project)",
    repoLink: "#",
    technologyUsed:
      "C#, .NET, Angular, SQL Server, Azure Cloud, GitHub Actions, CI/CD",
    responsibilities:
      "Developed a functional expense tracker application for drivers. Responsible for the full development lifecycle, including requirement elicitation, design, development, testing, and automation setup.",
    projectDescription:
      "A personal project focused on tracking and managing expenses efficiently for drivers.",
    projectLink: "#",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Logistics Management Back Office",
    repoLink: "#GitHub Repo: N/A",
    technologyUsed: "C#, .NET, SQL Server, HTML, CSS, jQuery, Bootstrap",
    responsibilities:
      "Worked across all stages of product development, from requirement analysis to deployment and maintenance.",
    projectDescription:
      "A web-based application designed to streamline back-office operations, including order creation, delivery tracking, invoicing, payment collection, and reporting.",
    projectLink: "URL: #private",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Bug Smasher (Fun Project)",
    repoLink: "Repo: #N/A",
    technologyUsed: "HTML, CSS, JavaScript",
    responsibilities: "JavaScript fun project was built as an assignment.",
    projectDescription:
      "Bug smasher game; every time you hit the bug moves faster to make it difficult for you to smash.",
    projectLink: "/fun-projects/bug-smasher/",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Etch a sketch (Fun Project)",
    repoLink: "Repo: #N/A",
    technologyUsed: "HTML, CSS, JavaScript",
    responsibilities: "JavaScript fun project was built as an assignment.",
    projectDescription:
      "Draw grids with your mouse-single or random multi color.",
    projectLink: "/fun-projects/etch-a-sketch/",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Rock Paper Scissor (Fun Project)",
    repoLink: "Repo: #N/A",
    technologyUsed: "HTML, JavaScript",
    responsibilities: "JavaScript fun project was built as an assignment.",
    projectDescription: "Rock paper scissor game. ",
    projectLink: "/fun-projects/rock-scissor-paper/",
  },
];

const createProjectRow = (
  imageSrc,
  projectTitle,
  repoLink,
  technologyUsed,
  responsibilities,
  projectDescription,
  projectLink,
  index,
) => {
  const row = document.createElement("div");
  row.classList.add("mb-3");
  row.classList.add("row");
  if (index % 2 === 0) {
    row.classList.add("project");
  } else {
    row.classList.add("project-alternate");
  }

  const col1 = document.createElement("div");
  col1.classList.add("col-2");
  const img = document.createElement("img");
  img.src = imageSrc;
  img.classList.add("project-image");
  const imgLink = document.createElement("a");
  imgLink.href = projectLink;
  imgLink.appendChild(img);
  col1.appendChild(imgLink);
  row.appendChild(col1);

  const col2 = document.createElement("div");
  col2.classList.add("col-10");
  const paraDiv = document.createElement("div");
  const titlePara = document.createElement("h5");
  titlePara.style.paddingTop = "10px";
  titlePara.style.paddingBottom = "10px";
  titlePara.innerHTML = projectTitle;
  const titleParaLink = document.createElement("a");
  titleParaLink.href = projectLink;
  titleParaLink.appendChild(titlePara);
  paraDiv.appendChild(titleParaLink);

  const repoPara = document.createElement("p");
  repoPara.innerHTML = repoLink;
  const repoParaLink = document.createElement("a");
  repoParaLink.href = repoLink;
  //repoParaLink.classList.add("");
  repoParaLink.appendChild(repoPara);
  paraDiv.appendChild(repoParaLink);

  const para2 = document.createElement("p");
  para2.innerHTML = `<strong>Technology used:</strong> ${technologyUsed}`;
  paraDiv.appendChild(para2);
  const para3 = document.createElement("p");
  para3.innerHTML = `<strong>Responsibilities:</strong> ${responsibilities}`;
  paraDiv.appendChild(para3);
  const para4 = document.createElement("p");
  para4.innerHTML = `<strong>Description:</strong> ${projectDescription}`;
  paraDiv.appendChild(para4);
  col2.appendChild(paraDiv);
  row.appendChild(col2);

  return row;
};

projects.forEach((element, index) => {
  const row = createProjectRow(
    element.imageSrc,
    element.projectTitle,
    element.repoLink,
    element.technologyUsed,
    element.responsibilities,
    element.projectDescription,
    element.projectLink,
    index,
  );
  projectSections.appendChild(row);
});
