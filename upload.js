document.addEventListener("DOMContentLoaded", () => {
  const fileInput = document.querySelector("#file");
  const progressBar = document.querySelector("#progress-bar");
  const log = document.querySelector("output");
  const uploadButton = document.querySelector("#upload");
  const label = document.querySelector("#label");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "upload.php", true);

  xhr.upload.addEventListener("loadstart", () => {
    hideUploadAndLabel();
  });

  xhr.upload.addEventListener("progress", (Event) => {
    const percentComplete = ((Event.loaded / Event.total) * 100).toFixed(2);
    progressBar.style.width = `${percentComplete}%`;
    log.textContent = `Uploading (${percentComplete}%)..`;
  });

  xhr.upload.addEventListener("loadend", () => {
    showUploadAndLabel();
    progressBar.style.display = "none";
    log.style.color = "green";
    log.textContent = "Upload completed";
  });

  xhr.addEventListener("load", () => {
    if (xhr.status == 200) {
      document.getElementById("data").innerHTML = xhr.responseText;
    }
  });

  uploadButton.addEventListener("click", () => {
    const fileData = new FormData();
    fileData.append("file", fileInput.files[0]);
    xhr.send(fileData);
  });

  function hideUploadAndLabel() {
    uploadButton.style.opacity = "0";
    label.style.opacity = "0";
  }

  function showUploadAndLabel() {
    uploadButton.style.opacity = "1";
    label.style.opacity = "1";
  }
});
