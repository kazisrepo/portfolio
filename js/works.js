let projectSections = document.getElementById("section-projects");
const projects = [
  {
    imageSrc: "",
    projectTitle: "Project 1 - See Live",
    repoLink:
      "https://github.com/kazisrepo/portfolio/tree/main/projects/bug-smasher/asdasdad-asdas-dasd-asd-asdasdasd-kjhjkh-khkhj-hkjhkk",
    technologyUsed: "C#",
    responsibilities: "Developer",
    projectDescription: "Logistics",
    projectLink: "#",
  },
  {
    imageSrc: "",
    projectTitle: "Project 2",
    repoLink: "#",
    technologyUsed: "JS, Java",
    responsibilities: "Dev",
    projectDescription: "Test project",
    projectLink: "#",
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
  index
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
    index
  );
  projectSections.appendChild(row);
});
